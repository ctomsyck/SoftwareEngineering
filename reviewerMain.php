<?php
    ob_start();?>
    <?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if($role == '1' || $role == '4'){
 ?>
        <html>

        <head>
            <link type="text/css" rel="stylesheet" href="stylesheet.css" />
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script type="text/javascript" src="collapse.js"></script>
            <title>Reviewer Main</title>
        </head>

        <body id="body1">
            <div id="header">
                <img src="image/title.png" width="423px" height="126px">
            </div>
            <br>
            <br>
            <div class="a">
                <a href="/downloadFiles.php/">Download files</a>
                <br><br>
                <a href="/reviewarticle.php/">Review article</a>
                <br><br><br>
            </div>
            <div class="wrapper">
                <div id="content">
                    <div class="accordion">
                        <div class="accordion-section">
                          <a class="accordion-section-title" href="#accordion-4">Instructions for Reviewers</a>
                            <div id="accordion-4" class="accordion-section-content">
                                <div id="ul-home">
                                    <!-- Begin Reviewers -->
                                    <p class="home">
                                        More information about the <i>JBI</i> and reviewer guidelines can be found at:
                                        <ul>
                                            <li>
                                                <a target="_blank" href="http://bioethicalinquiry.com/">Bioethical Inquiry</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="http://bioethicalinquiry.com/submissions/reviewers/">Author Submissions</a></li>
                                        </ul>
                                    </p>
                                    <p class="home">
                                        The peer-review process is an essential and vital tool for the publication of quality scholarship and for fostering constructive dialogue within and across disciplines. It provides advice and assistance to authors to help them improve and develop their manuscripts, and it facilitates the development and dissemination of knowledge in vetted academic resources.
                                        <br>
                                        <br> As a reviewer, you will be advising both the authors and the editors, who will make the final decision about whether to publish a manuscript. The editors will send your review to the author(s) at their discretion. Reviewers do not have to sign their reviews-thereby identifying themselves to the author(s)-unless they choose to do so.
                                        <br>
                                        <br> Please do not make any comments you do not wish the author(s) to see. (You may indicate some comments directed only to the editors; if so, please indicate these areas clearly in your review.)
                                        <br>
                                        <br> The review process can and should help authors develop their knowledge and abilities. Criticism should be reasoned, courteous, constructive, and sufficiently detailed to (1) help the editors make an informed decision and (2) assist the authors with areas for improvement. Even if a paper is not accepted for publication, the <i>JBI</i> will forward critiques and suggestions that might help authors improve their papers. References in support of comments are encouraged.
                                        <br>
                                        <br> Manuscripts submitted to the <i>Journal of Bioethical Inquiry</i> are confidential documents. Please do not discuss them with anyone.
                                        <br>

                                        <h4>Ethical Responsibilities of Reviewers</h4>
                                        <ol>
                                            <li>Confidentiality</li>
                                            <li>Constructive Critique</li>
                                            <li>Competence and Adequate Expertise</li>
                                            <li>Impartiality and Integrity</li>
                                            <li>Disclosure of Dualities and Conflicts of Interest</li>
                                            <li>Timeliness and Responsiveness</li>
                                        </ol>

                                        <h4>Reviewer Impropriety</h4> It is essential that reviewers act with the utmost propriety. The following are examples of reviewer impropriety:
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
                                        <h4>Submitting a Review</h4> In assessing a manuscript as to its suitability for publication, please provide constructive feedback and substantiate any comments you make on the strengths and weaknesses of the paper. Assessments should include responses to the following:

                                        <ol>
                                            <li><b>Accessibility of the Work to General Readers</b></li>
                                            <!--1-->
                                            <ol class="lowerAlpha">
                                                <li>Is a general bioethics journal the right place for this paper?</li>
                                                <li>Is it accessible for an intelligent but broad audience (the non-specialist reader)?</li>
                                                <li>Does the abstract reflect accurately what the paper says?</li>
                                            </ol>
                                            <li><b>Originality</b></li>
                                            <!--2-->
                                            <ol class="lowerAlpha">
                                                <li>Does it offer an interesting, original, and/or thought-provoking perspective that is an important development of existing thought on the chosen topic?</li>
                                                <li>Does it add enough to what is already in the published literature?</li>
                                                <ol class="lowerRoman">
                                                    <li>If so, what does it add?</li>
                                                    <li>If not, please cite relevant references.</li>
                                                </ol>
                                            </ol>
                                            <li><b>Scientific Rigour and Reliability</b></li>
                                            <!--3-->
                                            <ol class="lowerAlpha">
                                                <li>Is the research question clearly defined and appropriately answered?</li>
                                                <li>Is the study design appropriate and adequately described?</li>
                                                <li>Are the participants, if applicable, adequately described?</li>
                                                <li>Is IRB approval, if applicable, adequately described?</li>
                                                <li>Do the results/findings answer the research question?</li>
                                                <ol class="lowerRoman">
                                                    <li>Are they credible?</li>
                                                    <li>Are they well presented?</li>
                                                </ol>
                                                <li>Is the interpretation/conclusions warranted by and sufficiently derived from the data?</li>
                                                <ol class="lowerRoman">
                                                    <li>Does the work employ well-reasoned arguments, supported by appropriate and sufficient sources?</li>
                                                    <li>Is the message clear?</li>
                                                </ol>
                                            </ol>
                                            <li><b>Writing Style</b></li>
                                            <!--4-->
                                            <ol class="lowerAlpha">
                                                <li>Is the paper well written?</li>
                                                <li>Is the style and organization of the paper logical and easy to follow? (Include suggestions you think would improve the paper.)</li>
                                                <li>What other minor changes (e.g., spelling, grammar) are needed?</li>
                                            </ol>
                                            <li><b>In-Text Citations and References</b></li>
                                            <!--5-->
                                            <ol class="lowerAlpha">
                                                <li>Do these follow the <a target="_blank" href="http://bioethicalinquiry.com/jbi-style-guide/references/">JBI's Style</a> (<i>Chicago Manual of Style author-date format</i>)?</li>
                                                <li>Are they up-to-date and relevant?</li>
                                                <li>Are there any glaring omissions?</li>
                                            </ol>
                                            <li><b>Potentially Problematic Areas</b></li>
                                            <!--6-->
                                            <ol class="lowerAlpha">
                                                <li>Does the paper make any claims that might not be properly substantiated?</li>
                                                <li>Are there any areas of concern (from an ethical and/or scientific perspective) that the editors and author(s) should pay special attention to?</li>
                                            </ol>
                                        </ol>
                                        <h4>Questions</h4> If you encounter any difficulties during the reviewing process, please contact <i>JBI</i> Managing Editor
                                        <br>
                                        <br><a target="_blank" href="mailto:bronwenmorrell@gmail.com">Bronwen Morrell</a>.
                                        <br>
                                        <br>
                                        <table class="t1-home">
                                            <tbody>
                                                <tr>
                                                    <td class="t1-home"><strong>Bronwen Morrell</strong>
                                                        <br />
                                                        <em>Managing Editor</em></td>
                                                    <td class="t1-home"><a target="_blank" href="mailto:bronwenmorrell@gmail.com">bronwenmorrell@gmail.com</a>
                                                        <br />
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="t1-home"><strong>Leigh E. Rich</strong>
                                                        <br />
                                                        <em>Editor in Chief</em></td>
                                                    <td class="t1-home"><a target="_blank" href="mailto:leigh.rich@armstrong.edu ">leigh.rich@armstrong.edu </a>
                                                        <br />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="t1-home"><strong>Paul Komesaroff</strong>
                                                        <br />
                                                        <em>Editorial Board Chair</em></td>
                                                    <td class="t1-home"><a target="_blank" href="mailto:paul.komesaroff@monash.edu">paul.komesaroff@monash.edu</a>
                                                        <br />
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="t1-home"><strong>Jon F. Merz</strong>
                                                        <br />
                                                        <em>Ombudsman</em></td>
                                                    <td class="t1-home"><a target="_blank" href="mailto:merz@upenn.edu">merz@upenn.edu  </a>
                                                        <br/>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </p>
                                   <!-- End Reviewers -->
                                </div>
                                <!--ul-home-->
                            </div>
                            <!--accordion-4-content end-->

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
        header('Location: /loginR.html/'); //change link to redirect user
        ob_end_flush();
    }?>