<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DisasterPrep</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero { 
            background: url('assets/images/disaster-prep-bg2.png') no-repeat center/cover fixed; 
            background-color: #1a202c;
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
        }
        .hero-svg {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 150px;
            opacity: 0.4;
            animation: wave 10s infinite linear;
        }
        @keyframes wave {
            0% { transform: translateX(0); }
            50% { transform: translateX(-50px); }
            100% { transform: translateX(0); }
        }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes slideUp { from { transform: translateY(50px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-20px); }
            60% { transform: translateY(-10px); }
        }
        .animate-fade-in { animation: fadeIn 1.5s ease-in-out; }
        .animate-slide-up { animation: slideUp 1s ease-in-out forwards; }
        .animate-bounce { animation: bounce 1.5s infinite; }
        .reveal { opacity: 0; transition: opacity 0.5s ease; }
        .reveal.visible { opacity: 1; }
        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 20;
            background: rgba(26, 32, 44, 0.95);
            backdrop-filter: blur(5px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        .sticky-nav a.active {
            color: #10b981;
            border-bottom: 2px solid #10b981;
        }
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.5);
        }
        section:not(#home) {
            background: linear-gradient(135deg, #2d3748, #1a202c);
            color: #e2e8f0;
            position: relative;
            overflow: hidden;
        }
        section:not(#home)::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(16, 185, 129, 0.1), rgba(0, 0, 0, 0.2));
            z-index: 0;
        }
        section:not(#home) > * { position: relative; z-index: 1; }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
        }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        .tab-btn { transition: all 0.3s ease; }
        .tab-btn:hover, .tab-btn.active { background: #10b981; color: #fff; }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #10b981;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 50%;
            display: none;
        }
        .back-to-top.visible { display: block; }
    </style>
</head>
<body class="bg-gray-900 text-white">
  
    <nav class="sticky-nav w-full py-4">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center flex-wrap">
            <a href="#" class="text-2xl font-bold text-green-400">DisasterPrep</a>
            <div class="space-x-6 flex flex-wrap">
                <a href="#home" class="nav-link hover:text-green-400 transition-colors active">Home</a>
                <a href="#tips" class="nav-link hover:text-green-400 transition-colors">Tips</a>
                <a href="#stats" class="nav-link hover:text-green-400 transition-colors">Stats</a>
                <a href="#stories" class="nav-link hover:text-green-400 transition-colors">Stories</a>
                <a href="#resources" class="nav-link hover:text-green-400 transition-colors">Resources</a>
                <a href="signup.php" class="nav-link hover:text-green-400 transition-colors">Sign Up</a>
            </div>
        </div>
    </nav>

    <section id="home" class="hero">
        <svg class="hero-svg" viewBox="0 0 1440 150" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 75C240 25 480 125 720 75C960 25 1200 125 1440 75" stroke="#10b981" stroke-width="4" fill="none"/>
        </svg>
        <div class="text-center max-w-5xl mx-auto px-6 py-20 z-10">
            <h1 class="text-4xl md:text-6xl lg:text-8xl font-extrabold animate-fade-in animate-bounce">Prepare. Survive. Thrive!</h1>
            <p class="mt-4 text-lg md:text-xl lg:text-2xl text-gray-200 animate-slide-up" style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);">Master disaster readiness with expert tools and knowledge.</p>
            <div class="mt-10 space-x-4 flex flex-col md:flex-row justify-center animate-slide-up" style="animation-delay: 0.3s;">
                <a href="signup.php" class="inline-block bg-gradient-to-r from-green-600 to-blue-600 px-6 py-3 rounded-lg font-semibold text-lg btn-glow transition-all">Get Started</a>
                <a href="#tips" class="inline-block bg-transparent border-2 border-green-500 px-6 py-3 rounded-lg font-semibold text-lg hover:bg-green-500/20 btn-glow transition-all">Learn More</a>
            </div>
        </div>
    </section>

    <section id="tips" class="py-20 reveal">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-12 animate-slide-up">Disaster Preparedness Tips</h2>
            <div class="flex justify-center space-x-2 mb-8 flex-wrap">
                <button class="tab-btn px-4 py-2 rounded-lg font-semibold active" data-tab="general">General</button>
                <button class="tab-btn px-4 py-2 rounded-lg font-semibold" data-tab="flood">Flood</button>
                <button class="tab-btn px-4 py-2 rounded-lg font-semibold" data-tab="earthquake">Earthquake</button>
                <button class="tab-btn px-4 py-2 rounded-lg font-semibold" data-tab="wildfire">Wildfire</button>
            </div>
            <div id="general" class="tab-content active grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-semibold text-green-400">Build a Kit</h3>
                    <p class="mt-4">Stock water, food, flashlight, and first-aid supplies for 72+ hours.</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.2s;">
                                        <h3 class="text-2xl font-semibold text-green-400">Make a Plan</h3>
                    <p class="mt-4">Know evacuation routes and communication strategies.</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-semibold text-green-400">Stay Informed</h3>
                    <p class="mt-4">Monitor alerts and local news for updates.</p>
                </div>
            </div>
            <div id="flood" class="tab-content grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-semibold text-green-400">Elevate Items</h3>
                    <p class="mt-4">Move valuables to higher ground to avoid water damage.</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-semibold text-green-400">Avoid Floodwater</h3>
                    <p class="mt-4">6 inches of moving water can sweep you away—stay safe.</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-semibold text-green-400">Sandbags</h3>
                    <p class="mt-4">Use them to divert water flow from your home.</p>
                </div>
            </div>
            <div id="earthquake" class="tab-content grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-semibold text-green-400">Drop, Cover, Hold</h3>
                    <p class="mt-4">Protect yourself under sturdy furniture during shaking.</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-semibold text-green-400">Secure Heavy Items</h3>
                    <p class="mt-4">Bolt shelves and appliances to walls to prevent injury.</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-semibold text-green-400">Avoid Windows</h3>
                    <p class="mt-4">Stay clear of glass to avoid shards during an quake.</p>
                </div>
            </div>
            <div id="wildfire" class="tab-content grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-semibold text-green-400">Clear Vegetation</h3>
                    <p class="mt-4">Remove dry brush within 30 feet of your home.</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-semibold text-green-400">Fireproof Home</h3>
                    <p class="mt-4">Use fire-resistant materials for roofing and siding.</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-semibold text-green-400">Evacuate Early</h3>
                    <p class="mt-4">Leave before flames are close—don’t wait for orders.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="stats" class="py-20 bg-gray-800 reveal">
    <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-12 animate-slide-up">Why It Matters</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="card animate-slide-up" style="animation-delay: 0.1s;">
                    <p class="text-5xl font-bold text-green-400">70%</p>
                    <p class="mt-2">of people aren’t prepared (FEMA, 2023).</p>
                </div>
                <div class="card animate-slide-up" style="animation-delay: 0.2s;">
                    <p class="text-5xl font-bold text-green-400">500+</p>
                    <p class="mt-2">disasters strike globally each year.</p>
                </div>
                <div class="card animate-slide-up" style="animation-delay: 0.3s;">
                    <p class="text-5xl font-bold text-green-400">3 Days</p>
                    <p class="mt-2">minimum survival kit duration.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="stories" class="py-20 reveal">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-12 animate-slide-up">Survivor Stories</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-semibold text-green-400">Jane, Flood Survivor</h3>
                    <p class="mt-4">"We had an emergency kit and a plan. When the river overflowed, we grabbed our supplies and headed to higher ground. Preparation saved us."</p>
                </div>
                <div class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-semibold text-green-400">Mark, Earthquake Survivor</h3>
                    <p class="mt-4">"The quake hit at night. Secured furniture didn’t fall, and we knew to drop and cover. It’s why we’re still here."</p>
                </div>
            </div>
        </div>
    </section>

    <section id="resources" class="py-20 reveal">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-12 animate-slide-up">Resources</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <a href="#" class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-semibold text-green-400">Emergency Checklist</h3>
                    <p class="mt-4">Download our free PDF to build your disaster kit.</p>
                </a>
                <a href="https://www.redcross.org" target="_blank" class="card bg-gray-800 p-6 rounded-lg shadow-lg animate-slide-up" style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-semibold text-green-400">Red Cross</h3>
                    <p class="mt-4">Visit for expert disaster guidance and training.</p>
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 py-6">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="text-lg">© 2025 DisasterPrep. All rights reserved.</p>
            <p class="mt-2">
                <a href="mailto:support@disasterprep.org" class="text-green-400 hover:text-green-500">Contact Us</a> | 
                <a href="#" class="text-green-400 hover:text-green-500">Privacy Policy</a> | 
                <a href="#" class="text-green-400 hover:text-green-500">Terms of Service</a>
            </p>
        </div>
    </footer>

    <button class="back-to-top" id="backToTop">↑</button>

    <script>
        // Back to top button functionality
        const backToTopButton = document.getElementById('backToTop');
        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        };

        backToTopButton.onclick = function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        };

        // Tab functionality for tips
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');

                tabButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                tabContents.forEach(content => {
                    content.classList.remove('active');
                    if (content.id === tabId) {
                        content.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>