# web_scraping
This scraper returns the top ten submissions from one of the six suggested programming-related subreddits.

Technically, it sends a get-request via jquery/ajax to php which forwards the string to python returning a json-object. It uses the reddit-api (praw) & is authorized via OAuth.
