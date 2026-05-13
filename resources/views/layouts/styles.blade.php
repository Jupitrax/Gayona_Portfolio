<style>
    body {
        font-family: 'Times New Roman', Times, serif;
        background-color: white;
        text-align: justify;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }
    main {
        flex: 1 0 auto;
    }
    .resume-section {
        margin-bottom: 2rem;
    }
    .resume-section h3 {
        font-family: 'Inknut Antiqua', serif;
        color: black;
        border-bottom: 2px solid black;
        padding-bottom: 0.5rem;
        margin-bottom: 1rem;
    }
    .bio-box {
        background: black;
        color: white;
        font-size: 18px;
        line-height: 1.6;
    }
    .profile-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .image-container {
        background: black;
        border-radius: 10px;
        padding: 10px;
        text-align: center;
        transition: transform 0.3s ease;
    }
    .image-container:hover {
        transform: translateY(-5px);
    }
.image-container img {
        border-radius: 5px;
        width: 100%;
        height: auto;
        object-fit: contain;
        aspect-ratio: 4 / 3;
        cursor: pointer;
    }
.projects-intro {
        margin-bottom: 2rem;
    }

    .projects-intro-inner {
        width: 100%;
        max-width: 1000px;
        padding: 0 1rem;
    }

    .projects-intro-row {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.5rem;
        flex-wrap: wrap;
    }

.projects-intro-avatar {
        width: 170px;
        height: 170px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid #000;
    }

    .projects-intro-box {
        background: #000;
        border: 1px solid #000;
        padding: 1.25rem;
        border-radius: 12px;
        width: 100%;
    }

    .projects-intro-text {
        max-width: 700px;
        margin: 0;
        color: #fff;
        text-align: justify;
        line-height: 1.6;
        font-size: 18px;
    }

    .page-description {
        background: black;
        color: white;
        padding: 1rem;
        text-align: center;
        margin-bottom: 2rem;
    }

    /* --- PROJECT OVERLAY / MODAL STYLES --- */
    #overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        z-index: 9999;
        overflow-y: auto;
        padding: 50px 20px;
    }

    .overlay-content {
        max-width: 800px;
        margin: auto;
        background: #111;
        border: 1px solid #333;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 0 30px rgba(0,0,0,0.5);
    }

    #enlarged-img {
        max-width: 100%;
        max-height: 60vh;
        border-radius: 8px;
        margin-bottom: 25px;
        border: 1px solid #444;
    }

    #img-title {
        color: white;
        font-family: 'Inknut Antiqua', serif;
        font-size: 24px;
        margin-bottom: 15px;
        border-bottom: 1px solid #444;
        padding-bottom: 10px;
    }

    #img-description {
        color: #ddd;
        font-size: 18px;
        line-height: 1.6;
        text-align: center;
    }

    #close-btn {
        position: fixed;
        top: 20px;
        right: 30px;
        background: none;
        border: none;
        color: #fff;
        font-size: 60px;
        cursor: pointer;
        line-height: 1;
        transition: color 0.3s;
    }

    #close-btn:hover {
        color: #ff4d4d;
    }
</style>