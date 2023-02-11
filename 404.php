<?php
/*
Template Name: Страница 404
Template Post Type: page
*/
?>

<style>

    body {
        height: 100vh;
    }

    .rent-quastion {
        margin-top: auto;
    }


    .p-404 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 49.5vh;
        text-align: center;
    }

    .p-404 h1 {
        font-size: 200px;
        color: #0b2b37;
    }

    .p-404 h1 img {
        max-width: 145px;
    }

    .p-404 p {
        font-size: 24px;
    }

    .p-404 p a {
        color: #000;
        text-decoration: underline;
    }

    .ball-img {
        display: inline-block;
        width: 145px;
        animation: 1s 4s spin 1 ease;
    }

    @keyframes spin {
        100% {transform: rotate(360deg);}
    }

    .ball-img img {
        width: 100%;
        animation: 1s 1s ball 3 ease;
    }

    @keyframes ball {
        33% {transform: translateY(-50%);}
        66% {transform: translateY(50px);}
        100% {transform: translateY(0);}
    }

    @media (max-width: 600px) {
        .p-404 h1 {
            font-size: 120px;
        }

        .p-404 h1 img {
            max-width: 100px;
        }

        .p-404 p {
            margin-top: 50px;
            font-size: 20px;
        }

        .p-404 p a {
            margin-top: 5px;
            display: block;
        }
    }

    @media (max-width: 310px) {
        .p-404 h1 {
            font-size: 80px;
        }

        .p-404 h1 img {
            max-width: 60px;
        }

        .ball-img {
            max-width: 100px;
        }
    }

</style>

<? get_header(); ?>
<div class="p-404">
    <h1>404</h1>
    <p>Страница не найдена. <a href="/">Перейти на главную</a></p>
</div>
<? get_footer(); ?>