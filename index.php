<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            web scraping
        </title>
        <meta charset="UTF-8">
        <meta name="description" content="web scraping"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/scraping.css" type="text/css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/scraping.js"></script>
    </head>
    <body onload="startScraper();">
        <section class="g box">
            <h2>
                web scraping
            </h2>
            <div class="div_icon">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div id="project">
                <h3 id="label">subreddits to choose:</h3>           
                <form class="ui-widget" id="r_form" onsubmit="return false">
                    <table id="radios">
                        <tr>
                            <td><input type="radio" name="subreddit" value="java"> java</input></td>
                            <td><input type="radio" name="subreddit" value="programming" checked> programming</input></td>
                            <td><input type="radio" name="subreddit" value="python"> python</input></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="subreddit" value="learnjava"> learnjava</input></td>
                            <td><input type="radio" name="subreddit" value="learnprogramming"> learnprogramming</input></td>
                            <td><input type="radio" name="subreddit" value="learnpython"> learnpython</input></td>
                        </tr>
                    </table>
                </form>
                <div id="output"></div>
            </div>
        </section>
    </body>
</html>
