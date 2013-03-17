<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Andrew Sherrard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="scripts/vendor/jquery-1.8.2.min.js"></script>
</head>
<body>
    <div id="main-container">
        <header>
            <h1><a href="#home">Andrew Sherrard</a></h1>
            <h3>front end web developer</h3> 
            <nav>
                <ul>
                    <li><button id="open-skills" class="top-left">Skills</button></li>
                    <li><button id="open-experience" class="top-right">Experience</button></li>
                    <li><button id="open-work" class="bottom-left">Work</button></li>
                    <li><button id="open-contact" class="bottom-right">Contact</button></li>
                </ul>
            </nav>
        </header>
        <article id="home" class="open-page">
            <h1>I am Andrew Sherrard.</h1>
            <p>I get to put together puzzles everyday some people may have referred to me as a code monkey</p>
            <h3>I’m more of a code Jedi.</h3>  
            <h5>A master of the Force.</h5>
            <p>My force is merely 1 and 0’s compounding to build something greater. I work with HTML tags, CSS rules, javascript functions and variables.I have been trained in the ancient art of Table Based layouts for HTML emails as well. I am no where near a master at what I do yet, but I am continuously training, studying, and practicing my craft.</p>
            <p>Like a Jedi, I have been training my whole life. I played with legos since my earliest memories. Which set a solid foundation for how to solve web development problems. You must look at the instructions that are available, follow the rules set in place by the syntax you must abide by. Working with different API’s, libraries, and frameworks is like building any lego set, you have instructions in front of you, but you must put the pieces together yourself.  Your pieces must fit together perfectly. One stray tag can ruin everything just like one missing piece to your lego set can ruin your build. And once you’ve built something with instructions you are free to take things apart, rearrange them, and build massive creations beyond your wildest imagination.</p>
            <h3>My creations are responsive websites.</h3> 
            <h5>They are:</h5>
            <ul>
                <li>beautifully cross browser compatible</li>
                <li>contain valid HTML and CSS documents</li>
                <li>can be parsed with ease</li>
                <li>can be debugged and understood by other developers</li>
            </ul>
        </article>
        <article id="skills" class="hidden">
            <h1>My skills</h1>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>Responsive Web Development</li>
                <li>jQuery</li>
                <li>Javascript</li>
                <li>Beginner PHP</li>
                <li>Basic backbone.js</li>
                <li>Wordpress</li>
                <li>Mustache templating and JSON</li>
                <li>AJAX calls</li>
            </ul>
        </article>
        <article id="experience" class="hidden">
           <h1>I've worked at:</h1>
            <ul>
                <li>Thomson Reuters</li>
                <li>The Lacek Group</li>
                <li>BI Worldide</li>
            </ul>
            <h3>Where I learned:</h3>
            <ul>
                <li>How to develop for Interent Explorer 7</li>
                <li>HTML Email development</li>
                <li>Table based layouts</li>
                <li>Responsive web development</li>
                <li>How to implement a majority of trending design features</li>
                <li>backbone.js</li>
                <li>Twitter's Bootsrap</li>   
            </ul> 
        </article>
        <article id="work" class="hidden">
            <h1>I've worked on projects for:</h1>
            <ul>
                <li>Multiple law firms for Thomson Reuters:Findlaw</li>
                <li>United Airlines</li>
                <li>Toyota</li>
                <li>US Bank</li>
                <li>Häagen-Dazs</li>
                <li>IBM</li>
                <li>GM</li>
            </ul>
        </article>
        <article id="contact" class="hidden">
            <h1>Contact Me!</h1>
            <form>
                <label for="message-name">Your name:</label>
                <input type="text" name="message-name" required="" />
                <label for="email">Your email:</label>
                <input type="email" name="email" required />
                <label for="message">Your message:</label>
                <textarea rows="4" name="message"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </article> 
        <footer>
            <h6>Andrew Sherrard 2013</h6>
            <a href="mailto:asherrard28@gmail.com">asherrard28@gmail.com</a>
        </footer>
    </div>
    <script src="scripts/custom/main.js"></script>
</body>
</html>