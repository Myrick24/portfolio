@extends('layouts.app')

@section('title', 'Myrick | About Me')

@section('content')
<section class="about-section sec-pad">    
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main">About Me</span>
        </h2>
        <div class="about-header-container" style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
            <div class="about__content-img-cont">
                <img
                    src="{{ asset('assets/png/john-doe.png') }}"
                    alt="Myrick Noel B. Clemente"
                    class="about__content-img"
                    style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%; border: 3px solid #333;"
                />
            </div>
            <span class="heading-sec__sub">
                A passionate full stack app and web developer with AI and IT student from the Mabini, dedicated to building user-friendly digital solutions with a focus on design, security, and innovation.
            </span>
        </div>
        
        <!-- Main Content Area - Get to know me and Skills side by side -->
        <div class="about__content">
            <div style="display: flex; gap: 40px; flex-wrap: wrap;">
                <!-- Get to know me Section (Left) -->
                <div class="about__content-main" style="flex: 1; min-width: 300px;">
                    <div class="about__content-text">
                        <h3 class="about__content-title">Get to know me!</h3>
                        <div class="about__content-details">
                            <p class="about__content-details-para">
                                Hey! It's
                                <strong>Myrick Noel B. Clemente</strong>
                                and I'm a <strong>Full-stack Mobile and Web Developer and A Design enthusiast</strong> located in
                                Mabini. I've
                                <strong>worked</strong>
                                on academic and freelance projects, collaborated with awesome teams, and helped build  
                                <strong>digital solutions</strong>
                                for community-focused and sustainable initiatives.
                            </p>
                            <p class="about__content-details-para">
                                I'm a bit of a tech and design enthusiast. Over the years, I've explored and worked with a wide range of tools, web apps, and mobile platforms across different domains—from security-focused systems develope, to E-commerce apps like Harvest.
                                <strong>contact</strong> me here.
                            </p>
                        </div>
                        <a href="#contact" class="btn btn--med btn--theme dynamicBgClr">Contact</a>
                    </div>
                </div>
                
                <!-- My Skills Section (Right) -->
                <div class="about__content-skills" style="flex: 1; min-width: 300px;">
                    <h3 class="about__content-title">My Skills</h3>
        <div class="skills">
          <div class="skills__skill">HTML</div>
          <div class="skills__skill">CSS</div>
          <div class="skills__skill">JavaScript</div>
          <div class="skills__skill">Flutter</div>
          <div class="skills__skill">Firebase</div>
          <div class="skills__skill">GIT</div>
          <div class="skills__skill">MySql</div>
          <div class="skills__skill">Photoshop</div>
          <div class="skills__skill">Figma</div>
          <div class="skills__skill">Canva</div>
          <div class="skills__skill">Capcut</div>
         
          <div class="skills__skill">Laravel</div>
        </div>
                </div>
            </div>
            
            <!-- Education Background and Hobbies Section (Side by Side) -->
            <div class="about__content-additional" style="display: flex; gap: 40px; margin-top: 20px; flex-wrap: wrap;">                <!-- Education Background Section (Left) -->
                <div class="about__content-education" style="flex: 1; min-width: 300px;">
                    <h3 class="about__content-title">Education Background</h3>
                    <div class="about__content-details">
                        <div class="education-card" style="background-color:rgb(0, 132, 255); border-radius: 10px; padding: 30px; box-shadow: 0 6px 12px rgba(0,0,0,0.08); margin-bottom: 25px; transition: transform 0.3s ease;">
                            <h4 style="font-weight: 600; margin-bottom: 12px; color: #ffffff; font-size: 1.2rem;"><strong>DEUZMAN ELEMENTARY SCHOOL</strong></h4>
                            <p style="color: #ffffff; font-size: 1rem; line-height: 1.5;"><strong>DEGUZMAN</strong> MABINI PANGASINAN</p>
                        </div>

                        <div class="education-card" style="background-color:rgb(0, 132, 255); border-radius: 10px; padding: 30px; box-shadow: 0 6px 12px rgba(0,0,0,0.08); margin-bottom: 25px; transition: transform 0.3s ease;">
                            <h4 style="font-weight: 600; margin-bottom: 12px; color: #ffffff; font-size: 1.2rem;"><strong>TAGUDIN NATIONAL HIGH SCHOOL</strong></h4>
                            <p style="color: #ffffff; font-size: 1rem; line-height: 1.5;"><strong>TAGUDIN</strong> MABINI PANGASINAN</p>
                        </div>
                        
                        <div class="education-card" style="background-color:rgb(0, 132, 255); border-radius: 10px; padding: 30px; box-shadow: 0 6px 12px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                            <h4 style="font-weight: 600; margin-bottom: 12px; color: #ffffff; font-size: 1.2rem;"><strong>PANGASINAN STATE UNIVERSITY</strong></h4>
                            <p style="color: #ffffff; font-size: 1rem; line-height: 1.5;"><strong>ALAMINOS CITY CAMPUS</strong>, BOLANEY ALAMINOS CITY PANGASINAN</p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Hobbies Section (Right) -->
                <div class="about__content-hobbies" style="flex: 1; min-width: 300px;">
                    <h3 class="about__content-title">Hobbies & Interests</h3>
                    <div class="about__content-details">
                        <p class="about__content-details-para">
                            When I'm not coding, I enjoy exploring new technologies and staying up-to-date with the latest developments 
                            in AI and software development. I love participating in coding challenges and contributing to 
                            <strong>open-source projects</strong> that align with my interests.
                        </p>
                        <p class="about__content-details-para">
                            Gaming is another passion of mine, particularly games that involve strategy and problem-solving. 
                            I also enjoy reading tech blogs, watching programming tutorials, and experimenting with new frameworks 
                            and tools in my spare time. These activities help me stay creative and continuously improve my skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
