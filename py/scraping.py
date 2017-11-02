#!/usr/bin/env python

import praw, json, sys
from datetime import datetime

def login():
<<<<<<< HEAD
    username = "bot____"
    client_id = "D2FBAGZaVtcp2Q"
    client_secret = "0Zb3cPenVReryG_dwBPurtIrHzM"
    user_agent = "joedoe"
=======
    #for registration, go to: https://www.reddit.com/prefs/apps/
    username = "XXX" 
    client_id = "XXX"
    client_secret = "XXX"
    user_agent = "XXX"
>>>>>>> 341d2df776765759069e2a669e874386b822543e

    return praw.Reddit(username = username,
                client_id = client_id,
                client_secret = client_secret,
                user_agent = user_agent)

def extract(sub_name):
    submissions = []
    for submission in reddit.subreddit(sub_name).hot(limit=10):
        time = getTime(submission.created_utc)
        selftext = submission.selftext.split("\n")[0]
        if len(selftext) > 200:
            selftext = submission.selftext[:200] + "..."
        submissions.append([submission.shortlink, submission.title,
                            selftext, submission.url,
                            submission.num_comments, time])
    return json.dumps(submissions)

def getTime(timestamp):
    date = datetime.utcfromtimestamp(timestamp)
    now = datetime.now()
    since = now - date
    days = since.days
    hours = int(since.seconds / (60 * 60))
    mins = int(since.seconds / 60)
    if days > 0:
        if days == 1:
            time = "1 day ago"
        else:
            time = str(days) + " days ago"
    elif hours > 0:
        if hours == 1:
            time = "1 hour ago"
        else:
            time = str(hours) + " hours ago"
    else:
        if mins == 0:
            time = "less than a minute ago"
        elif mins == 1:
            time = "1 minute ago"
        else:
            time = str(mins) + " minutes ago"
    return time

if __name__ == "__main__":
    reddit = login()
    print(extract(sys.argv[1]))
