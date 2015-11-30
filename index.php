<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Tangerine" rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="outer_container">
            <!--<div id="container">-->
                <div id="header">
                    <?php
                        include ('banner.php');
                    ?>
                </div>
                
                <div id="main_content">

                <div id="home_title_mmfj">
                    Welcome to the Purpose and Identity Processes Lab!
                </div>
                <div id="quote_mmfj">
                    "If one does not know to which port one is sailing, no wind is favorable." <br>
                    -Lucius Annaeus Seneca
                </div>

                <div id="inner_main_content">
                    <div id="news_pane_mmfj">
                        <table>
                            <th id="tabletitle_mmfj">News</th>
                            <tr>
                                <td><a href="http://www.news.cornell.edu/stories/2014/10/sense-purpose-might-ease-diversity-anxiety">"Sense of purpose might ease diversity anxiety" <br> <span id="author">by H. Roger Segelken, 10/02/14.</span></a></td>
                            </tr>
                            <td>Envisioning an increasingly diverse America – the Census Bureau predicts ethnic minorities, combined, will constitute the majority of the U.S. population by 2050 – causes anxiety for a lot of white people...</td>
                            <tr>
                                <td><a href="https://www.youtube.com/watch?v=03L0OUdt_cI">"Intervening on Purpose and Meaning in Adolescence," <br> <span id="author">Anthony Burrow &amp; Janis Whitlock, 05/14/13.</span></a></td>
                            </tr>
                            <td>Audio and powerpoint recording from the BCTR Talks at Twelve series. Recorded May 14, 2013...</td>
                        </table>
                    </div>

                    <div id="content_mmfj">
                        <div id="special_header_mmfj">
                                Our Motivation
                        </div>
                        <div class="inner_content_mmfj">
                        Our research is motivated by broad interests in understanding how a sense of self, identity, and purpose shape the experiences people have in their everyday lives. We have invested primarily in two lines of research:
                        </div>
                        <div class="header_mmfj">
                            Psychosocial Consequences of Purpose
                        </div>
                        <div class="inner_content_mmfj">
                            <ul>
                                <li>How do adolescents and young adults develop and engage with a sense of purpose?</li>
                                <li>To what extent does cultivating such a sense promote positive adjustment outcomes?</li>
                            </ul>
                        </div>
                        <div class="header_mmfj">
                            Race in the Context of Lived Experience
                        </div>
                        <div id="special_inner_content_mmfj">
                            <ul>
                                <li>How do salient aspects of racial identity function as sources of resilience in the face of negative daily experiences?</li>
                                <li>How do these relations unfold over time?</li>
                            </ul>
                        </div>
                    </div>

                </div>
            <!--</div>-->
                </div>
            <div id="footer">
                <?php include ('footer.php'); ?>
            </div>
        </div>
    </body>
</html>