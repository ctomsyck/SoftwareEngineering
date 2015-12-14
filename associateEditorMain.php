<?php
    ob_start();?>

    <?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if($role == '2' || $role == '1'){
 ?>

        <html>

        <head>
            <link type="text/css" rel="stylesheet" href="stylesheet.css" />
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script type="text/javascript" src="collapse.js"></script>
            <title>Associate Editor Main</title>
        </head>

        <body id="body1">
            <div id="header">
                <img src="image/title.png" align="center" width="423px" height="126px">
            </div>
            <br>
            <br>
            <div class="a">
                <a href="assignReviewer.php">Assign a reviewer to a submission</a>
                <br>
                <br>
                <a href="aerecommendation.php">Make recommendation for a title</a>
                <br><br><br>
            </div>
            <div class="wrapper">
                <div id="content">
                    <div class="accordion">
                        <div class="accordion-section">

                            <a class="accordion-section-title" href="#accordion-2">Instructions for Associate Editors</a>
                            <div id="accordion-2" class="accordion-section-content">
                                <div id="ul-home">
                                    <!-- Begin Associate Editors -->
                                    <p class="home">

                                        As the Associate Editor for a manuscript, you are responsible for overseeing the peer-review process, which is an essential and vital tool for the publication of quality scholarship and for fostering constructive dialogue within and across disciplines. It provides advice and assistance to authors to help them improve and develop their manuscripts, and it facilitates the development and dissemination of knowledge in vetted academic resources.
                                        <br>
                                        <br> Based on the peer reviews you receive (a minimum of two) as well as your own review of the paper, you will advise the journal about whether a manuscript should be published.
                                        <br>
                                        <br> Please do not make any comments in your suggested decision that you do not wish the author(s) to see. (You may indicate some comments directed only to the editor; if so, please indicate these areas clearly.) Even if a paper is not accepted for publication, the <i>JBI</i> forwards critiques and suggestions that might help authors improve their papers. References in support of comments are encouraged.
                                        <br>
                                        <br> Manuscripts submitted to the <i>Journal of Bioethical Inquiry</i> are confidential documents. Please do not discuss them with anyone.
                                    </p>
                                    <p class="home">
                                        <h4>Ethical Responsibilities of Associate Editors and Reviewers</h4>
                                        <ol>
                                            <li>Confidentiality</li>
                                            <li>Constructive Critique</li>
                                            <li>Competence and Adequate Expertise</li>
                                            <li>Impartiality and Integrity</li>
                                            <li>Disclosure of Dualities and Conflicts of Interest</li>
                                            <li>Timeliness and Responsiveness</li>
                                        </ol>

                                        <h4>Reviewer Impropriety</h4> It is essential that reviewers act with the utmost propriety. The following reviewer impropriety:
                                        <ul>
                                            <li>Displaying lack of respect for authors;</li>
                                            <li>Making personal or disparaging comments about an author;</li>
                                            <li>Lack of acknowledgement of conflicts or dualities of interest;</li>
                                            <li>Misrepresenting facts in a review;</li>
                                            <li>Unreasonably delaying the review process;</li>
                                            <li>Unfairly criticizing a competitor's work;</li>
                                            <li>Breaching authors' confidentiality;</li>
                                            <li>Proposing changes that appear to support the reviewer's own work or hypotheses;</li>
                                            <li>Making use of confidential information to achieve personal or professional gain; and</li>
                                            <li>Using ideas or text from a manuscript under review.</li>
                                        </ul>

                                        <h4>Best Practices for Supervising the Peer-Review Process</h4>

                                        <ol>
                                            <h4><li>First Identify Whether a Paper Is Appropriate</li></h4>
                                            <ol class="lowerAlpha">
                                                <li>Before even considering reviewers to invite, determine if the paper is appropriate for the journal.</li>
                                                <li>Also determine if the writing and level of scholarship are executed well enough to be deemed ready for peer review.</li>
                                                <li>If the paper does not meet both of these criteria, briefly explain this in comments for the author(s) and submit a suggested decision of either:</li>
                                                <ol class="lowerRoman">
                                                    <li>Reject Without Review</li>
                                                    <li>Revise Before Review</li>
                                                </ol>
                                            </ol>
                                            <h4><li>Invite Reviewers Early</li></h4>
                                            <ol class="lowerAlpha">
                                                <li>Once assigned a manuscript, do not delay in identifying and inviting reviewers (as a domino effect occurs and further prolongs the time authors must wait for a decision).</li>
                                                <li>The first full round of peer review should be no longer than four to six weeks.</li>
                                                <li>Explore databases such as PubMed and others to help identify appropriate reviewers.</li>
                                            </ol>
                                            <h4><li>Invite More Reviewers Than Needed</li></h4>
                                            <ol class="lowerAlpha">
                                                <li>A minimum of two external reviews is required.</li>
                                                <li>Please invite at least four reviewers to ensure two reviews can be obtained within an appropriate timeframe.</li>
                                            </ol>
                                            <h4><li>Reviewer Expertise</li></h4>
                                            <ol class="lowerAlpha">
                                                <li>Obtain at least one review from a scholar who has clear expertise in the submission's specific topic area.</li>
                                                <li>Obtain at least one review from a scholar who has expertise in ethics (even if this person may not have expertise in the specific topic area).</li>
                                            </ol>
                                            <h4><li>Kindly Remind Reviewers</li></h4>
                                            <ol class="lowerAlpha">
                                                <li>Stay on top of the timeframe for each manuscript and send reviewers helpful reminders.</li>
                                                <li>If reviewers are not responding adequately, invite more reviewers.</li>
                                            </ol>
                                            <h4><li>Submit Your Suggestion Decision Prompty</li></h4>
                                            <ol class="lowerAlpha">
                                                <li>Include your comments (i.e., essentially a third review) to author(s).</li>
                                                <li>Include any additional, confidential comments to the editor (but mark this clearly).</li>
                                                <li>Submit an appropriate suggested decision as follows:</li>

                                                <ol class="lowerRoman">
                                                    <li>Reject After Review</li>
                                                    <li>Major Revisions (the paper has not been accepted but will be reconsidered pending changes)</li>
                                                    <li>Minor Revisions (the paper is considered accepted pending small changes; this decision should only be used when <b><i>very small</i></b> changes are needed, perhaps in formatting)</li>
                                                    <li>Accept but wait for edited version</li>
                                                </ol>
                                            </ol>
                                    </p>
                                    <!-- End Associate Editors -->
                                </div>
                                <!--ul-home-->
                            </div>
                            <!--accordion-2-content end-->

                        </div>
                        <!--accordion-section-->
                    </div>
                    <!--accordion-->
                </div>
                <!--Content-->
            </div>
            <div class="push"></div>
            <footer>Copyright &copy; 2015</footer>
        </body>

        </html>
        <?php
    } else {
        header('Location: /loginA.html/'); //change link to redirect user
        ob_end_flush();
    }?>