<?php
    ob_start();?>


    <?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if($role == '1' || $role == '3'){
 ?>

        <html>

        <head>
            <link type="text/css" rel="stylesheet" href="stylesheet.css" />
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script type="text/javascript" src="collapse.js"></script>
            <title>Submitter Main</title>
        </head>

        <body id="body1">
            <div id="header">
                <img src="image/title.png" align="center" width="423px" height="126px">
            </div>
            <br>
            <br>
            <div class="a">
                <a href="/submitNewManuscript.php/">Submit New Manuscript</a>
                <br><br><br>
            </div>
            <div class="wrapper">
                <div id="content">
                    <div class="accordion">
                        <div class="accordion-section">
                            <a class="accordion-section-title" href="#accordion-3">Instructions for Authors</a>
                            <div id="accordion-3" class="accordion-section-content">
                                <div id="ul-home">
                                    <!-- Begin Authors -->
                                    <p class="home">
                                        More information about the <i>JBI</i> and submission guidelines can be found at:
                                        <ul>
                                            <li>
                                                <a target="_blank" href="http://bioethicalinquiry.com/">Bioethical Inquiry</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="http://bioethicalinquiry.com/submissions/authors/">Author Submissions</a></li>
                                            <li>

                                                <a target="_blank" href="http://bioethicalinquiry.com/wp-content/uploads/JBI_IFA.pdf ">Author Submissions PDF</a></li>
                                        </ul>
                                        <h4>Manuscript Formatting</h4>
                                    </p>
                                    <p class="home">
                                        Ensuring your paper conforms to <i>Journal of Bioethical Inquiry</i> style will increase the speed of the reviewing and copy-editing processes and reduce overall time to publication. Please follow all instructions carefully.
                                        <br>
                                        <br> For full details regarding the formatting of manuscripts, please see the <a target="_blank" href="http://bioethicalinquiry.com/wp-content/uploads/JBIN_StyleManual.pdf">Style Guide</a> and/or the <i>JBI</i> <a target="_blank" href="http://bioethicalinquiry.com/wp-content/uploads/JBI_IFA.pdf">Instructions for Authors</a>
                                        <br>
                                        <br> Please submit your Title Page, Manuscript, and any Supplemental Materials as either a <b>Microsoft Word file</b> or a <b>PDF</b>.
                                        <h4>Font, Margins, and Spacing</h4>
                                        <ul>
                                            <li>Times New Roman, 12-point font</i>
                                                <li>1 (one) space (not two) following ending punctuation between sentences</li>
                                                <li>1.5 line spacing (and remove all padding Word adds before/after paragraphs)</li>
                                                <li>Left-justification("align text left")</li>
                                                <li>1 (one) space before and after ellipses but no (0) spaces before and after en- and em- dashes</li>
                                                <li> No more than six (6) footnotes</li>
                                        </ul>

                                        <h4>Title Page (please save as a separate document)</h4> The title page should be formatted as follows (please include the headings in brackets and pay attention to bolding and case):
                                        <br>
                                        <br> [issue] (<b>Leave This Blank</b>)
                                        <br> [category] <b>Add Category/Article Type Name Here</b>
                                        <br> [title] <b>Add a Main Title Here Using Title Case</b>
                                        <br> [subtitle] <b>If Applicable, Add a Subtitle Here Using Title Case</b>
                                        <br> [author(s)] <b>First A. Last; Second B. Last</b>
                                        <br>
                                        <br> [author details]
                                        <br>
                                        <b>F. A. Last</b> [corresponding author]
                                        <br> Name of Affiliated Organization
                                        <br> Address
                                        <br> City, State/Province Postal Code COUNTRY
                                        <br> e-mail: xxxxx@####.edu
                                        <br>
                                        <br>

                                        <b>S. B. Last</b>
                                        <br> Name of Affiliated Organization
                                        <br> Address
                                        <br> City, State/Province Postal Code COUNTRY
                                        <br> e-mail: xxxxx@####.edu
                                        <br>
                                        <br>

                                        <b>Abstract</b> Add full abstract in here. Abstracts should be about 150-200 words.
                                        <br>
                                        <br>

                                        <b>Keywords</b> Xxxx; Xxxx; Xxxx; Xxxx; Xxxx; Xxxx;
                                        <br>
                                        <ul>
                                            <li>Keywords should be separated by a semicolon and employ "Sentence case."</li>
                                            <li>For example: Bioethics; Informed consent; End-of-life issues; Advance directives</li>
                                        </ul>
                                        <h4>Language</h4>
                                    </p>
                                    <p class="home">
                                        The <i>JBI</i> publishes all paper using Oxford's "<a target="_blank" href="http://www.oxforddictionaries.com/us/">British &amp; World English</a>" for spelling and hyphenation but punctuates according to <i>The Chicago Manual of Style</i> (e.g., double quotation marks, periods and commas inside quotation marks, etc.). Please consult both references (and the <i>JBI</i> <a target="_blank" href="http://bioethicalinquiry.com/wp-content/uploads/JBIN_StyleManual.pdf">Style Guide</a> or the <i>JBI</i> <a target="_blank" href="http://bioethicalinquiry.com/wp-content/uploads/JBI_IFA.pdf">Instructions for Authors</a>) for assistance.
                                        <br>
                                        <br>

                                        <ol>
                                            <li> Please use <a target="_blank" href="http://www.oxforddictionaries.com/">Oxford Dictionaries: British &amp; World English</a>
                                                <ul>
                                                    <li>Always use the <b>first accepted spellings</b> of words.</li>
                                                    <li>For example, "recognize" instead of "<a target="_blank" href="http://www.oxforddictionaries.com/definition/english/recognize?q=recognise">recognise</a>" etc.</li>
                                                    <li>Please note, you likely will have to look up many words. Please consult the print or online version of the Oxford dictionary, and do not rely on Microsoft Word's spelling</li>
                                                </ul>
                                                <li>Hyphenate compound words according to the Oxford dictionary (e.g., neo-liberal, non-compliance, socio-economic, etc.).</li>
                                                <ul>
                                                    <li>Again, you likely will have to look these up. Please do not rely on Microsoft Word's spelling</li>
                                                </ul>
                                        </ol>
                                        <b>NOTE:</b> Keep original spelling in all direct quotes and references.
                                        <br>

                                        <h4>Abbreviations and Punctuation of Certain Words</h4>
                                        <ul>
                                            <li>Use abbreviations sparingly, stating in full at first use: The <i>Journal of Bioethical Inquiry</i> (<i>JBI</i>) is a peer-reviewed publication</li>
                                            <li>healthcare (one word per Oxford)</li>
                                            <li>well-being (hyphenated)</li>
                                            <li>U.S. or U.K. is an adjective, not a noun(e.g., U.S. courts tend to ... vs. courts in the United States tend to ...)</li>
                                            <li><i>CMOS</i> (as of 16th edition) perfers web, website, web page, e-mail, and so forth (with a lowercase "w" and "e"); however, capitalize World Wide Web and Internet (see CMOS &sect; 7.76, 16th edition).</li>
                                            <li>the three Rs; the 1600s (not the 1600's); the 1990s (not the 1990's); the '80s (not the 80's)</li>
                                        </ul>

                                        <h4>In-Text Citations and References</h4>
                                    </p>
                                    <p class="home">
                                        <i>JBI</i> style is based on <i>The Chicago Manual of Style</i> and uses the author-date referencing system. Please follow the <a target="_blank" href="http://bioethicalinquiry.com/jbi-style-guide/">examples</a> provided closely. Direct quotations must include page or paragraph(&para;) numbers in in-text citations. Use double quotation marks for direct quotations and for words or phrases used in a special sense. Use single quotation marks for quotations within quotations. Direct quotations longer than forty (40) words should be set off clearly in an indented paragraph; quotation marks are not used for these longer block quotes.

                                        <h4>Please list references at the end of the manuscript:</h4>
                                        <ul>
                                            <li>Use a hanging indentation (not hard returns and tabs)</li>
                                            <li>Alphabetize by author last name</li>
                                            <li>Use initials with periods for given and middle names, with no space in between</li>
                                            <li>Place first author's initials <i>after</i> the last name; all others <i>precede</i> the last name</li>
                                            <li>Do not place year in parentheses</li>
                                            <li>Use "Sentence case" for all titles listed in references</li>
                                            <li>Do not place quotation marks around titles</li>
                                            <li>Spell out the full name of journals (capitalizing "The" if part of the official name)</li>
                                            <li>Italicize journal names and titles of books</li>
                                            <li>List volume <b>AND</b> issue number for journal references</li>
                                            <li>Do not condense page spans (256-277, <i>not</i> 256-77)</li>
                                            <li>Use en-dashes for page spans (256-265, <i>not</i> 256-265)</li>
                                        </ul>
                                        <h4>Questions</h4> If you encounter any difficulties during the submission process, please contact <i>JBI</i> Managing Editor
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
                                    <!-- End Authors -->
                                </div>
                                <!--ul-home-->
                            </div>
                            <!--accordion-3-content end-->
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
        header('Location: /loginS.html/'); //change link to redirect user
        ob_end_flush();
    }?>