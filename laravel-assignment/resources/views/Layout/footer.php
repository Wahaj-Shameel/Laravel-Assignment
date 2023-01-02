<style>
    img {
        max-width: 100%;
        height: auto;
    }

    section {
        padding: 60px 0;
        /* min-height: 100vh;*/
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .contact-area {
        border-bottom: 1px solid red;
        background-color: white;
        color: red;
        font-weight: bold;
    }

    .contact-content p {
        font-size: 15px;
        margin: 30px 0 60px;
        position: relative;

    }

    .contact-content p::after {
        background: #353C46;
        bottom: -30px;
        content: "";
        height: 1px;
        left: 50%;
        position: absolute;
        transform: translate(-50%);
        width: 80%;
        color: red;
        font-weight: bold;
    }

    .contact-content h6 {
        font-size: 15px;
        font-weight: 400;
        margin-bottom: 10px;
        color: red;
        font-weight: bold;
    }

    .contact-content span {
        color: red;
        ;
        margin: 0 10px;
    }

    .contact-content img {
        max-width: 210px;
    }

    section,
    footer {
        background: white;
        color: red;
        font-weight: bold;
    }

    footer p {
        padding: 40px 0;
        text-align: center;
    }

    footer img {
        width: 44px;
    }
</style>
<section class="contact-area" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="contact-content text-center"><a href="#"><img
                            src="https://miro.medium.com/max/1400/1*m0s2io11J82PR7miqan92w.png" alt="logo"></a>
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                    <div class="hr"></div>
                    <h6>1120 Lorem ipsum dolor sit amet,
                        W-11,
                        Karachi.</h6>
                    <h6>+01 2345 6789 12<span>|</span>+01 2345 6789 12</h6>
                </div>
            </div>
        </div>
    </div>
</section>

        <footer>
            <p>Copyright &copy;
                2022 <img src="https://miro.medium.com/max/1400/1*m0s2io11J82PR7miqan92w.png" alt="logo">All Rights
                Reserved.</p>
        </footer>