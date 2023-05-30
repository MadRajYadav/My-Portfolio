<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
        }
        
        header {
            position:fixed;
            z-index: 9999 ;
            width: -webkit-fill-available;
            background-color:black;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        
        header a{
            text-decoration: none;
            color: #f1dddd;
            font-size: 20px;
        }
        
        section {
            width: -webkit-fill-available;
            padding: 20px;
            text-align: center;
        }
        #slideBox{
            display: flex;
            width: -webkit-fill-available;
            align-items: center;
            
            padding-top: 20px;
        }
        #home{
            overflow-x: scroll;
            display: flex;
            width: -webkit-fill-available;
            border-radius:10px;
            padding: 0;
            margin: 0 -25px;
            
        }
        #home::-webkit-scrollbar {
            display: none;
        }
        .img{
            margin: 20px;
            border-radius: 10px;
            max-width: 98%;
            box-shadow: 0 0 15px 3px black;
        }
        
        #scroll_Left{
            z-index:1;
        }
        #pAbout{
            color: white;
            /* width: 100%; */
            background: black;
            margin: 19px 0px;
            padding: 30px 60px;
        }
       /*
       ul li{
            list-style-type: none;
            background: whitesmoke;
            margin-top: 25px;
            padding: 20px;
            color: #f308af;
            margin-left: -20px;
            margin-right: -20px;
        }
        ul li a{
            color: blue;
            background: black;
            border-radius: 5px;
            padding: 10px;
            margin-top:20px;
        }
        */

        .search-results {
            margin-top: 20px;
        }
        .repo-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background: whitesmoke;
            margin-top: 25px;
            padding: 20px;
            color: #f308af;
           
        }

        .repo-name {
            font-size: 18px;
            font-weight: bold;
        }

        .repo-description {
            margin-top: 5px;
            color: #666;
        }

        .repo-link {
            display: inline-block;
            margin-top: 10px;
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius:5px;
        }

        .repo-link:hover {
            background-color: #555;
        }



        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: -webkit-fill-available;
            
        }

        .about_rohit{
			  display:flex;
			  flex-direction:column;
			  justify-content: center;
			  align-items: center;
			  border-radius: 2%;
			  padding:10px;
			  width:250px;
			  margin:15px;
		  
		  }
          .rohit_pic_div{
            height: 170px;
          }
		  .about_rohit img{
            height: -webkit-fill-available;
            width: -webkit-fill-available;
            border-radius: 15%;
            border: 1px solid gray;
		  }
		  .social_media{
			  display:flex;
			  flex-direction: row;
			  justify-content: center;
			  align-items: center;
			  
		  }
		  .social_media a{
			  margin-left:10px;
		  }
		  .icon:hover{
			  cursor:pointer;
			  
		  }
		  .icon{
			  font-size:25px;
			  margin-left:5px;
		  
		  }
        
        form input,
        form textarea,
        form button {
            display: block;
            margin-bottom: 10px;
        }
        
        form input,
        form textarea {
            width: -webkit-fill-available;
            padding: 10px;
            border: 1px solid #ccc;
        }
        
        form button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            
            width:100%;
            border: none;
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
           
        }




        
       
    
    </style>


</head>
<body>
    <header>
        <a href="#homeSec">Home</a>
        <a href="#about">About</a>
        <h1>My Portfolio</h1>
        <a href="#projects">Projects</a>
        <a href="#contact" >Contact</a>
    </header>
    <div style="position: absolute;top: 80px;width: 99%;">
        <section  id="homeSec">
        
            <h2>Welcome to my portfolio!</h2>
            <div id="slideBox">
                <i id = "scroll_Left" class="fa fa-arrow-circle-o-left" style = "font-size:50px" onclick = "scroll_left()" ></i>
                <div id="home">
            
        
                    <?php
                        $add = "http://localhost:7882/PHP%20PROGRAM/portfolio/project_screenshots/scrn";
                        for($i=0;$i<42;$i++){
                            $picAdd1 = $add . (string) $i . ".jpg";
                    ?>
                        
                            <img class="img" src="<?php echo $picAdd1; ?>"  height="600px"/>
                        
                    <?php
                        }
                    ?>
                </div>
                <i id = "scroll_Right" class="fa fa-arrow-circle-o-right" style = "font-size:50px" onclick = "scrollRight()" ></i>
        
            </div>
            </section>
        
        <section id="about" >
            <h2>About Me</h2>
            <p id="pAbout">My name is Rohit Kumar, and I am from Munger district in Bihar. I have recently completed my graduation and am eagerly waiting for my final year results. I pursued a degree in BCA, and I am proud to say that I have been the topper of my stream since my first year of college. This has allowed me to learn many new things during my course of study, such as programming languages and algorithms. In fact, I was awarded the top prize in the Code Combat 1.0 competition at my college in 2022.
Prior to my graduation, I passed my 12th exam in 2020 with first division and pursued DCA from my village. I completed my 10th exam in 2015 with second division. I come from a nuclear family with five members, and my aim is to secure a reputed job in a multinational company.
In my free time, I enjoy practicing martial arts and coding. I find that these hobbies help me stay focused and improve my skills. One of my strengths is my ability to learn new things quickly. This makes me well-suited to keep up with the constantly evolving field of technology.
However, I recognize that one of my weaknesses is that I can talk too much with my friends and trust them too easily. I am working on this and striving to improve in this area.I am a passionate web developer with experience in HTML, CSS, PHP, JavaScript, and MySQL.</p>
        </section>
        
        <section id="projects" >
            <h2 >My Projects</h2>
            <div id="searchResults" class="search-results"></div>
            <ul >
                <?php
                /*
                // Fetch projects from the database
                $host_name = "localhost";
                $user_name = "root";
                $password = "";
                $database_name = "myportfolio";

                $con = mysqli_connect($host_name,$user_name,$password,$database_name);
                if(!$con){
                    echo "<script>alert('connection error')</script>";
                }
                
                $sql = "SELECT * FROM projects";
                $result = $con->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><h2>" . $row["projectname"] . "</h2><h4 style = 'color:black;'>" . $row["discription"] . "</h4><a href = ".$row["link"].">".$row["link"]."</a></li>";
                    }
                } else {
                    echo "<li>No projects found.</li>";
                }
                
                $con->close();
                */
                ?>
            </ul>
                
<script>
            function searchRepositories() {
            var input = "MadRajYadav";
            var url = "https://api.github.com/users/" + input + "/repos";

            fetch(url).then(response => response.json()).then(data => {
                    var resultsContainer = document.getElementById("searchResults");
                    resultsContainer.innerHTML = "";
                    data.forEach(repo => {
                        var repoItem = document.createElement("div");
                        repoItem.className = "repo-item";

                        var repoName = document.createElement("div");
                        repoName.className = "repo-name";
                        repoName.textContent = repo.name;

                        var repoDescription = document.createElement("div");
                        repoDescription.className = "repo-description";
                        repoDescription.textContent = repo.description;

                        var repoLink = document.createElement("a");
                        repoLink.className = "repo-link";
                        repoLink.href = repo.html_url;
                        repoLink.target = "blank";
                        repoLink.textContent = "View on GitHub";

                        repoItem.appendChild(repoName);
                        repoItem.appendChild(repoDescription);
                        repoItem.appendChild(repoLink);

                        resultsContainer.appendChild(repoItem);
                    });
                })
                .catch(error => console.error(error));
        }

        searchRepositories();
</script>
        </section>
        
        <section id="contact">
            <h2>Contact Me</h2>
            <p>You can reach me at rohitkumarmakwa1@gmail.com or through the form below:</p>
            <form action="submit_form.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Your Name" required="">
                <input type="email" name="email" placeholder="Your Email" required="">
                <input type="number" name="number" placeholder="Your number" required="" >
                <textarea name="message" placeholder="Your Message" required=""></textarea>
                
                <center><button type="submit">Send</button></center>
            </form>
        </section>
        
        <footer>
            <div style="display:flex; flex-direction:row;">
                <div class="about_rohit">
                    <div class="rohit_pic_div">
                        <img src="image/rohit.jpg">
                    </div>
                    <b>Rohit kumar</b>
                    <span>Frontend & Backend Devloper</span>
                    <div calss="social_media">
                        <a href="https://www.facebook.com/profile.php?id=100032796079014&mibextid=ZbWKwL" > <i class="fa fa-facebook-square icon" style="color:#3b5998;"></i></a>
                        <a href = "https://www.instagram.com/invites/contact/?i=eo9a0fx0vgyl&utm_content=a9box5f"><i class="fa fa-instagram icon" style="color: red;"></i></a>
                        <a href ="https://www.linkedin.com/in/rohit-kumar-98930a252"><i class="fa fa-linkedin-square icon" style="color:#0e76a8;"></i></a>
                        <a href ="https://youtube.com/@mad.raj.k.y4103"><i class="fa fa-youtube-play icon" style="color:#FF0000;"></i></a>
                    </div>
                    <div>
                            <p><a href="mailto:rohitkumarmakwa1@gmail.com">rohitkumarmakwa1@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <p>© 2023 My Portfolio. All rights reserved.</p>
        </footer>
    </div>
    <script src="script.js"></script>


</body>
</html>
