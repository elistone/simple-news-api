<!DOCTYPE html>
<html>
    <head>
        <title>api.newslistings.com</title>
        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #909ba1;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            h1,h2{
                text-align: left;
                border-bottom: 1px solid #eeeeee;
                padding-bottom: 10px;
            }

            .container {
                text-align: center;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .element{
                text-align: left;
                padding:15px;
                margin:10px;
                background-color: #fcfcfc;
                border:1px solid #eeeeee;
            }

            .element .heading{
                padding-bottom:10px;
                font-weight: bold;
            }

            .element .code{
                font-family: 'Consolas';
                margin: 10px 0px;
                color:#677ba1;
            }

            .element .get{color:#78a16c;}
            .element .post{color:#a19a29;}
            .element .patch{color:#a1a1a1;}
            .element .delete{color:#a10303;}


        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">api.newslistings.com</div>

                <h2>Category's</h2>

                <div class="element">
                    <div class="heading">View All</div>
                    <div class="code"><strong class="get">GET</strong> http://api.newslistings.com/category</div>
                    <div class="prams"></div>
                    <div class="text">Get all the news categorys (limited to 15)</div>
                </div>

                <div class="element">
                    <div class="heading">View by id</div>
                    <div class="code"><strong class="get">GET</strong> http://api.newslistings.com/category/{id}</div>
                    <div class="prams"></div>
                    <div class="text">Get a specific news category basied upon the {id}</div>
                </div>

                <div class="element">
                    <div class="heading">Add new category</div>
                    <div class="code"><strong class="post">POST</strong> http://api.newslistings.com/category</div>
                    <div class="prams"></div>
                    <div class="text">Post/create another news category</div>
                </div>

                <div class="element">
                    <div class="heading">Update category</div>
                    <div class="code"><strong class="patch">PATCH</strong> http://api.newslistings.com/category/{id}</div>
                    <div class="prams"></div>
                    <div class="text">Updates a news category basied upon the {id}</div>
                </div>

                <div class="element">
                    <div class="heading">Remove category</div>
                    <div class="code"><strong class="delete">DELETE</strong> http://api.newslistings.com/category/{id}</div>
                    <div class="prams"></div>
                    <div class="text">Deletes a news category basied upon the {id}</div>
                </div>


                <h2>News</h2>

                <div class="element">
                    <div class="heading">View All</div>
                    <div class="code"><strong class="get">GET</strong> http://api.newslistings.com/news</div>
                    <div class="prams"></div>
                    <div class="text">Gets all the news articles (limited to 15)</div>
                </div>

                <div class="element">
                    <div class="heading">View by id</div>
                    <div class="code"><strong class="get">GET</strong> http://api.newslistings.com/news/{id}</div>
                    <div class="prams"></div>
                    <div class="text">Get a news article basied upon the {id}</div>
                </div>

                <div class="element">
                    <div class="heading">Add new news</div>
                    <div class="code"><strong class="post">POST</strong> http://api.newslistings.com/category/{id}/news/</div>
                    <div class="prams"></div>
                    <div class="text">Post/create a news article for a specific category {id}</div>
                </div>

                <div class="element">
                    <div class="heading">Update news</div>
                    <div class="code"><strong class="patch">PATCH</strong> http://api.newslistings.com/category/{catId}/news/{newsId}</div>
                    <div class="prams"></div>
                    <div class="text">Updates a news article {newsId} found in a specific category {catId}</div>
                </div>

                <div class="element">
                    <div class="heading">Remove news</div>
                    <div class="code"><strong class="delete">DELETE</strong> http://api.newslistings.com/category/{catId}/news/{newsId}</div>
                    <div class="prams"></div>
                    <div class="text">Deletes a news article {newsId} found in a specific category {catId}</div>
                </div>

            </div>
        </div>
    </body>
</html>
