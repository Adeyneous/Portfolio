<?php require 'Includes/header.php'; ?>

<span style="font-size: 2.5rem; color: purple;">Skills:</span>
 

<div class="skills-container">
    <?php
    $skills = [
        'Frontend' => [
            'percentage' => 87,
            'description' => 'With three years of front-end development experience, 
            my journey began at Hennepin Tech, where I delved into the intricacies of HTML, CSS, and JavaScript. 
            These foundational classes provided me with the practical skills needed to create responsive and 
            user-friendly web interfaces. My curiosity didnt stop at the classroom door; driven to expand my expertise, 
            I independently pursued TypeScript. This self-directed learning enhanced my JavaScript knowledge, 
            allowing me to build more robust and scalable applications. My educational and self-taught experiences have 
            equipped me with a solid skill set to tackle diverse front-end challenges.'
        ],
        'Backend' => [
            'percentage' => 74,
            'description' => 'My experience as a backend developer began at Hennepin Tech, where I initially dove into the 
            fundamentals of programming with Python, followed by advanced Python courses. The curriculum included hands-on 
            projects with JavaScript, MySQL, T-SQL, and SQL Server, establishing a strong foundation in data management 
            and web application logic. Beyond the classroom, my passion for learning drove me to master other technologies 
            independently. I cultivated a diverse skill set by exploring PHP for server-side scripting, Node.js for scalable 
            network applications, and MongoDB for flexible NoSQL database solutions. I also familiarized myself with 
            powerful data stores like Redis, Apache Cassandra, HBase, and DynamoDB, each contributing to my proficiency 
            in managing varied database environments and handling big data challenges.'
        ],
        'Frameworks' => [
            'percentage' => 77,
            'description' => '
            My journey with frameworks commenced at Hennepin Tech, where I was introduced to the powerful and versatile .NET framework. 
            This structured environment honed my ability to build robust and scalable applications. 
            In my pursuit of expanding my technical toolkit, I independently embraced React, a modern JavaScript library 
            for building user interfaces. This self-initiated learning allowed me to design dynamic and responsive web 
            components, further enriching my front-end development skills and enabling me to create seamless user 
            experiences.'
        ],
        'Data Science' => [
            'percentage' => 70,
            'description' => 'After four semesters at Hennepin Technical College, Im enthusiastic about furthering my education at Metropolitan State University in St. Paul, Minnesota. 
            The summer following my second semester was a turning point when I began exploring machine learning. 
            My aim is to pursue a Masters in Data Science. With a solid foundation in Python and JavaScript, Im eager to 
            delve deeper into the remarkable capabilities these skills unlock. What excites me most about 
            machine learning is its power to sift through vast datasets and unravel intricate problems, offering solutions that can transform industries and improve lives.'
        ],

        'Mobile Development' => [
            'percentage' => 74,
            'description' => 'After a semester of mobile app development, my eagerness to deepen my understanding in this field led me to purchase a comprehensive book on the subject. 
            This book has been instrumental in enhancing my skills, particularly in Kotlin, a language I had been aspiring to learn for quite some time. The knowledge I have gained 
            has been incredibly fulfilling, and I am very pleased with the progress I have made. The journey into mobile app development, especially with Kotlin, has opened new horizons 
            for me, and I am excited about the possibilities this knowledge unlocks.'
        ],
        
        
        // ... Add other skills as needed
    ];
    

    foreach ($skills as $skill => $data) {
        $radius = 50; // Radius of the circle
        $circumference = 2 * pi() * $radius;
        $fullOffset = $circumference;
        $percentage = $data['percentage'];
        $description = $data['description'];
    
        echo "<div class='skill' data-skill-percentage='$percentage' data-skill-desc='$description' data-skill-name='$skill'>
            <svg width='120' height='120' viewBox='0 0 120 120'>
                <circle cx='60' cy='60' r='$radius' fill='none' class='circle-background'/>
                <circle cx='60' cy='60' r='$radius' fill='none' class='circle-progress' stroke-dasharray='$circumference' stroke-dashoffset='$fullOffset'/>
                <text x='50%' y='50%' class='circle-text' dy='.3em' text-anchor='middle'></text>
            </svg>
            <div class='skill-name'>$skill</div>
        </div>";
    }
    
    ?>
</div>

<span style="font-size: 2.5rem; color: purple;">Experience:</span>


<p id="skill-description">

   <!-- Link to your JavaScript file -->
<script src="/Scripts/skills.js"></script>


<?php
