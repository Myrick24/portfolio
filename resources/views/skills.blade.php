@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<section class="skills-section sec-pad">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main">My Skills</span>
            <span class="heading-sec__sub">
                Here are my technical skills and expertise
            </span>
        </h2>        <div class="skills-content">
            <!-- First Row -->
            <div class="skills-row" style="display: flex; flex-wrap: wrap; gap: 30px; margin-bottom: 30px;">
                <div class="skills-col" style="flex: 1; min-width: 300px;">
                    <div class="skills-item">
                        <h3 class="skills-item-title">Front-End</h3>
                        <ul class="skills-list">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                            <li>React</li>
                            <li>Vue</li>
                            <li>Tailwind CSS</li>
                        </ul>
                    </div>
                </div>
                <div class="skills-col" style="flex: 1; min-width: 300px;">
                    <div class="skills-item">
                        <h3 class="skills-item-title">Back-End</h3>
                        <ul class="skills-list">
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>Node.js</li>
                            <li>Firebase</li>
                            <li>MySQL</li>
                            <li>MongoDB</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Second Row -->
            <div class="skills-row" style="display: flex; flex-wrap: wrap; gap: 30px;">
                <div class="skills-col" style="flex: 1; min-width: 300px;">
                    <div class="skills-item">
                        <h3 class="skills-item-title">Design</h3>
                        <ul class="skills-list">
                            <li>Photoshop</li>
                            <li>Canva</li>
                            <li>Capcut</li>
                            <li>Figma</li>
                            <li>Adobe XD</li>
                            <li>Illustrator</li>
                        </ul>
                    </div>
                </div>
                <div class="skills-col" style="flex: 1; min-width: 300px;">
                    <div class="skills-item">
                        <h3 class="skills-item-title">Tools</h3>
                        <ul class="skills-list">
                            <li>Git</li>
                            <li>GitHub</li>
                            <li>VS Code</li>
                            <li>Canva</li>
                            <li>Figma</li>
                            <li>Adobe Photoshop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
