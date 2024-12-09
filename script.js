document.addEventListener('DOMContentLoaded', () => {
    console.log('Developer Linktree is ready!');

    // Smooth scrolling for anchor links (if present in future updates)
    const links = document.querySelectorAll('a.link');
    links.forEach(link => {
        link.addEventListener('click', event => {
            if (link.getAttribute('href').startsWith('#')) {
                event.preventDefault();
                const targetId = link.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    // Dynamic greeting based on time of day
    const greetingElement = document.querySelector('.bio');
    if (greetingElement) {
        const hours = new Date().getHours();
        let greeting;
        if (hours < 12) {
            greeting = 'Good morning!';
        } else if (hours < 18) {
            greeting = 'Good afternoon!';
        } else {
            greeting = 'Good evening!';
        }
        greetingElement.textContent = `${greeting} I'm a Full Stack Developer | Open Source Enthusiast.`;
    }
});
