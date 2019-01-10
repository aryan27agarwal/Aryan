#!/usr/bin/env python3

""" 
    requires: 
    1. flask=*
    (same must be specified in requirements.txt)
"""

"""
    the following environment variable must be set:
    1. BOT_TOKEN: Private token of the Telegram bot
    2. GROUP_ID: The group id where the message will be sent by Telegram
"""

import os
import json
from urllib import request

BOT_TOKEN = os.environ['BOT_TOKEN']
GROUP_ID = os.environ['GROUP_ID']

SEND_URL = 'https://api.telegram.org/bot{token}/sendMessage'.format(token = BOT_TOKEN)

def send_message(text, mode = 'Markdown'):
    # mode must be md or html
    if mode not in ('Markdown', 'HTML'):
        raise Exception("Invalid mode detected. Must be either 'Markdown' or 'HTML'")
    
    req_body = json.dumps({
        'chat_id': GROUP_ID,
        'text': text,
        'parse_mode': mode
    }).encode('utf-8') # POST body as bytes object
    
    api_request = request.Request(SEND_URL, req_body)
    api_request.add_header('Content-Type', 'application/json')

    with request.urlopen(api_request) as req:
        api_response = req.read().decode('utf-8')
    
    return {
        "success": json.loads(api_response)['ok'] # true when message successfully sent
    }

from flask import make_response, jsonify

def serve(req):
    try:
        payload = req.get_json()
        text = 'You have an update.\n```json\n{}\n```'.format(
            json.dumps(payload['content'], indent=4)
        )
        output = send_message(text)
    except:
        return make_response(jsonify({}), 200)
    else:
        return make_response(jsonify(output), 200)
