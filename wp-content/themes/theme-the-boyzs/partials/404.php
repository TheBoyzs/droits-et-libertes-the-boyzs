<div class="page-wrapper">
        <section class="sectionerror">
            <div class="errorcode">
                <span>4</span>
                <span>0</span>
                <span>4</span>
            </div>
            <div class="errordescription">
                <p>Cette page est introuvable</p>
                <p>Retournez tout <bold>droit</bold> vers l'accueil pour retrouver votre <bold>liberté</bold> !</p>
            </div>
            <div class="errorbutton">
                <button href="index.html">Retourner à l'acceuil</button>
            </div>            
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
        gsap.from(".errorcode > span", {
            duration:1.5,
            top:"-100vh",
            ease:"bounce.out",
            delay:1,
            stagger:0.2
        })
        gsap.from(".errordescription", {
            duration:0.75,
            opacity:0,
            delay:2
        })
        gsap.from(".errorbutton", {
            duration:1,
            opacity:0,
            delay:3
        })
    </script>