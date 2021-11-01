<?php include('../login/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="/image/favicon.ico" />
    <link rel="shortcut icon" href="/static/favicon/favicon.ico" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="theme-color" content="#000" />
    <meta name="viewport" content="width=device-width" />
    <meta charSet="utf-8" />
    <link rel="stylesheet" href="../../css/stylzes.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="stylesheet" href="../../css/stylze.css" />
    <style id="__jsx-3a64d1ae4f0f7fab">
        .banner.jsx-3a64d1ae4f0f7fab {
            width: 100%;
            background: #000;
            color: #fff;
            height: 50px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .inner.jsx-3a64d1ae4f0f7fab {
            width: 100%;
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 1rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        a.jsx-3a64d1ae4f0f7fab {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        p.jsx-3a64d1ae4f0f7fab {
            color: #fff;
            margin: 0;
            -webkit-transition: color 0.15s ease;
            transition: color 0.15s ease
        }

        @media (max-width:640px) {
            p.jsx-3a64d1ae4f0f7fab {
                font-size: 14px
            }
        }
    </style>
    <style id="__jsx-2308493473">
        div.jsx-2308493473 {
            width: 100%;
            margin: 0 auto;
            padding: 0 1rem;
            max-width: 1024px;
            text-align: center;
        }

        div.jsx-2308493473:after {
            content: '';
            display: table;
            clear: both
        }

        @media screen and (max-width:960px) {
            div.jsx-2308493473 {
                padding: 0 2rem;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-2308493473 {
                padding: 0 1rem;
            }
        }
    </style>
    <style id="__jsx-b662909c11ef51ed">
        .btn.jsx-b662909c11ef51ed {
            position: relative;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            cursor: pointer;
            -webkit-text-decoration: none;
            text-decoration: none;
            padding: 0.25rem 0.5rem;
            margin: -0.25rem -0.5rem;
            border-radius: 7px;
            color: #0070f3;
            background-color: transparent;
            border: none;
            font-size: inherit;
            line-height: inherit;
            -webkit-transition: background 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
            transition: background 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
            outline: none
        }

        .btn.jsx-b662909c11ef51ed:hover {
            color: #0070f3;
            background: rgba(0, 118, 255, 0.1)
        }

        .btn.invert.jsx-b662909c11ef51ed {
            margin: 0;
            padding: 0 3.5rem;
            height: 2.81rem;
            line-height: 2.8rem;
            border-radius: 7px;
            background-color: #0070f3;
            box-shadow: 0 4px 14px 0 rgba(0, 118, 255, 0.39);
            color: white
        }

        .btn.invert.jsx-b662909c11ef51ed:hover {
            background: rgba(0, 118, 255, 0.9);
            box-shadow: 0 6px 20px rgba(0, 118, 255, 0.23)
        }

        .btn.invert.jsx-b662909c11ef51ed:active {
            background: #006ae6
        }

        .btn.invert.outline.jsx-b662909c11ef51ed {
            background: #fff;
            color: #696969;
            box-shadow: 0 4px 14px 0 rgba(0, 0, 0, 0.1)
        }

        .btn.invert.outline.jsx-b662909c11ef51ed:hover {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 6px 20px rgba(93, 93, 93, 0.23)
        }

        .btn.small.jsx-b662909c11ef51ed {
            font-size: 0.875rem;
            height: 1.5rem;
            padding: 0 0.75rem;
            line-height: inherit;
            border-radius: 5px
        }

        .btn.loading.jsx-b662909c11ef51ed {
            background: #fafafa;
            color: #888888;
            border: 1px solid #000;
            border-color: #eaeaea;
            box-shadow: none;
            cursor: default;
            pointer-events: none
        }

        .btn.loading.jsx-b662909c11ef51ed>.text.jsx-b662909c11ef51ed {
            visibility: hidden
        }

        .btn.jsx-b662909c11ef51ed>.loading-dots.jsx-b662909c11ef51ed {
            position: absolute
        }
    </style>
    <style id="__jsx-1651122719">
        svg.jsx-1651122719 {
            width: 22px;
            height: 22px
        }
    </style>
    <style id="__jsx-4177912742">
        nav.jsx-4177912742 {
            position: relative;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 80px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .links.jsx-4177912742 {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            z-index: 1
        }

        .links.jsx-4177912742 a.jsx-4177912742 {
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: color 0.2s ease;
            transition: color 0.2s ease;
            margin-left: 1rem;
            font-size: 16px;
        }

        .links.jsx-4177912742 a.jsx-4177912742:hover {
            color: #fff;
        }

        .links.jsx-4177912742 a.selected.jsx-4177912742 {
            color: #0070f3;
            text-shadow: 0px 0px 1px #0070f3
        }

        .links.jsx-4177912742 a.jsx-4177912742:first-child {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 0
        }

        a.icon.jsx-4177912742,
        a.icon.jsx-4177912742 div.container {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-justify-content: center;
            justify-content: center
        }

        a.icon.jsx-4177912742 div.container {
            overflow: visible
        }

        .mobile-logo.jsx-4177912742,
        .mobile-top.jsx-4177912742 {
            display: none
        }

        .header-feedback.jsx-4177912742 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        .no-feedback.jsx-4177912742 {
            visibility: hidden;
            min-width: 1em
        }

        a.icon.icon.jsx-4177912742 {
            margin-left: 0
        }

        .learn.jsx-4177912742 a {
            background-color: #FFF;
            border: none;
            color: #000;
            padding: 0.25rem 1rem;
            margin: 0;
            font-size: 16px;
            font-weight: 500
        }

        .learn.jsx-4177912742 a:focus,
        .learn.jsx-4177912742 a:hover {
            background-color: var(--accents-2);
            color: #000
        }

        .menu-button.jsx-4177912742 {
            margin-left: 10px;
            display: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            cursor: pointer;
            -webkit-text-decoration: none;
            text-decoration: none;
            height: 36px;
            width: 36px;
            margin: 0 -5px 0 5px;
            border-radius: 7px;
            background-color: transparent;
            border: none;
            font-size: inherit;
            line-height: inherit;
            -webkit-tap-highlight-color: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none
        }

        @media (max-width:640px) {
            .mobile-top.jsx-4177912742 {
                margin-bottom: 0
            }

            .links.jsx-4177912742 {
                display: none
            }

            .menu-button.jsx-4177912742 {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex
            }
        }

        @media (max-width:890px) {
            .mobile-logo.jsx-4177912742 {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex
            }

            nav.jsx-4177912742 {
                height: unset;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-align-items: flex-start;
                -webkit-box-align: flex-start;
                -ms-flex-align: flex-start;
                align-items: flex-start;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                justify-content: flex-start;
                padding: 1rem 0
            }

            nav.jsx-4177912742 .links.jsx-4177912742 .logo.jsx-4177912742,
            nav.jsx-4177912742 .links.jsx-4177912742 .learn.jsx-4177912742 {
                display: none
            }

            nav.jsx-4177912742 .links.jsx-4177912742 {
                overflow-x: auto
            }

            nav.jsx-4177912742 .links.jsx-4177912742 a.jsx-4177912742 {
                font-size: 14px
            }

            nav.jsx-4177912742 .links.jsx-4177912742 a.icon.jsx-4177912742 {
                margin-left: 10px
            }

            nav.jsx-4177912742 .links.jsx-4177912742 a.jsx-4177912742:nth-child(2) {
                margin: 0
            }

            .mobile-top.jsx-4177912742 {
                width: 100%;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                justify-content: space-between;
                margin-bottom: 0.5rem
            }

            .mobile-top-right.jsx-4177912742 {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }

            .learn.jsx-4177912742 {
                margin-right: 0.5rem
            }
        }

        @media (max-width:1020px) {
            .header-feedback.jsx-4177912742 {
                display: none
            }
        }
    </style>
    <style id="__jsx-3610867073">
        header.jsx-3610867073 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: space-around;
            justify-content: space-around;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            background: #0A090C;
            z-index: 1000;
        }

        header.sticky.jsx-3610867073 {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        .mobile-menu-wrapper.jsx-3610867073 {
            position: -webkit-sticky;
            position: sticky;
            top: 80px;
            z-index: 2000
        }
    </style>
    <style id="__jsx-2426124136">
        div.jsx-2426124136 {
            width: 100%;
            margin: 0 auto;
            padding: 0 0;
            text-align: center;
        }

        div.jsx-2426124136:after {
            content: '';
            display: table;
            clear: both
        }

        @media screen and (max-width:960px) {
            div.jsx-2426124136 {
                padding: 0 0;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-2426124136 {
                padding: 0 0;
            }
        }
    </style>
    <style id="__jsx-3728799446">
        div.jsx-3728799446 {
            width: 100%;
            margin: 0 auto;
            padding: 0 1rem;
            max-width: 1024px;
        }

        div.jsx-3728799446:after {
            content: '';
            display: table;
            clear: both
        }

        @media screen and (max-width:960px) {
            div.jsx-3728799446 {
                padding: 0 2rem;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-3728799446 {
                padding: 0 1rem;
            }
        }
    </style>
    <style id="__jsx-aa018528dc9378d9">
        .title.jsx-aa018528dc9378d9 {
            font-weight: 800;
            font-size: 48px;
            letter-spacing: -0.06em;
            line-height: 1.2;
            margin: 0 0 30px
        }

        .description.jsx-aa018528dc9378d9 {
            font-weight: 400;
            font-size: 16px;
            line-height: 1.6;
            letter-spacing: -0.02em;
            color: var(--accents-5);
            margin: 0 0 40px
        }

        .description.jsx-aa018528dc9378d9 br.jsx-aa018528dc9378d9 {
            display: none
        }

        .main-button.jsx-aa018528dc9378d9 {
            margin-bottom: 30px
        }

        .intro-container.jsx-aa018528dc9378d9 {
            padding: 40px 0 50px
        }

        .title-br-mobile.jsx-aa018528dc9378d9 {
            display: block
        }

        .title-br-desktop.jsx-aa018528dc9378d9 {
            display: none
        }

        @media screen and (min-width:500px) {
            .title-br-mobile.jsx-aa018528dc9378d9 {
                display: none
            }

            .title-br-desktop.jsx-aa018528dc9378d9 {
                display: block
            }
        }

        @media screen and (min-width:780px) {
            .title.jsx-aa018528dc9378d9 {
                font-size: 70px;
                line-height: 1.1;
                letter-spacing: -0.05em
            }

            .description-br.jsx-aa018528dc9378d9 {
                display: block
            }

            .intro-container.jsx-aa018528dc9378d9 {
                padding: 60px 0 0
            }
        }

        @media screen and (min-width:1024px) {
            .title.jsx-aa018528dc9378d9 {
                font-size: 100px;
                line-height: 1
            }

            .description.jsx-aa018528dc9378d9 {
                font-size: 20px
            }

            .intro-container.jsx-aa018528dc9378d9 {
                padding: 120px 0 30px
            }
        }

        .button-spacer.jsx-aa018528dc9378d9 {
            display: inline-block;
            padding: 10px
        }

        .links.jsx-aa018528dc9378d9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .links.jsx-aa018528dc9378d9>*.jsx-aa018528dc9378d9 {
            padding: 0 0.5rem
        }
    </style>
    <style id="__jsx-2325123048">
        div.jsx-2325123048 {
            width: 100%;
            margin: 0 auto;
            padding: 0 0;
            overflow: hidden;
        }

        div.jsx-2325123048:after {
            content: '';
            display: table;
            clear: both
        }

        @media screen and (max-width:960px) {
            div.jsx-2325123048 {
                padding: 0 0;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-2325123048 {
                padding: 0 0;
            }
        }
    </style>
    <style id="__jsx-3425802836">
        div.jsx-3425802836 {
            width: 100%;
            margin: 0 auto;
            padding: 6.25rem 1rem;
            max-width: 1024px;
            text-align: center;
        }

        div.jsx-3425802836:after {
            content: '';
            display: table;
            clear: both
        }

        @media screen and (max-width:960px) {
            div.jsx-3425802836 {
                padding: 4rem 2rem;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-3425802836 {
                padding: 4rem 1rem;
            }
        }
    </style>
    <style id="__jsx-273631706">
        h2.jsx-273631706 {
            font-size: 2rem;
            letter-spacing: -1px;
            margin-bottom: 1rem;
            line-height: 1.3
        }

        div.jsx-273631706 {
            position: relative;
            text-align: center;
            margin: 1rem 0 3rem 0
        }

        .anchor.jsx-273631706 {
            position: absolute;
            top: -9rem
        }

        @media screen and (max-width:640px) {
            div.jsx-273631706 {
                padding: 0 10px
            }
        }
    </style>
    <style id="__jsx-3870336739">
        a.jsx-3870336739 {
            text-decoration: none;
            color: #067df7;
            font-size: inherit
        }

        a.jsx-3870336739:not(.no-underline):hover {
            text-decoration: underline
        }
    </style>
    <style id="__jsx-2883158435">
        code.jsx-2883158435 {
            color: #000;
            font-family: Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
            font-size: 0.9em;
            white-space: pre-wrap
        }

        code.no-wrap.jsx-2883158435 {
            white-space: nowrap
        }

        code.jsx-2883158435::before {
            content: '`'
        }

        code.jsx-2883158435::after {
            content: '`'
        }

        code.dark.jsx-2883158435 {
            color: #50e3c2
        }

        code.disabled.jsx-2883158435 {
            color: #777
        }
    </style>
    <style id="__jsx-1875905909">
        code.jsx-1875905909 {
            color: inherit;
            font-family: Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
            font-size: 0.9em;
            white-space: pre-wrap
        }

        code.no-wrap.jsx-1875905909 {
            white-space: nowrap
        }

        code.jsx-1875905909::before {
            content: '`'
        }

        code.jsx-1875905909::after {
            content: '`'
        }

        code.dark.jsx-1875905909 {
            color: #50e3c2
        }

        code.disabled.jsx-1875905909 {
            color: #777
        }
    </style>
    <style id="__jsx-2170489277">
        .slider-container.jsx-2170489277 {
            overflow: hidden;
            white-space: nowrap
        }

        .slider-content-wrapper.jsx-2170489277 {
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            -webkit-animation: slide 80s linear infinite;
            animation: slide 80s linear infinite
        }

        .slider-content-wrapper.jsx-2170489277>div.jsx-2170489277 {
            display: inline-block
        }

        @keyframes slide {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }

            to {
                -webkit-transform: translate3d(-50%, 0, 0);
                -moz-transform: translate3d(-50%, 0, 0);
                -ms-transform: translate3d(-50%, 0, 0);
                transform: translate3d(-50%, 0, 0)
            }
        }
    </style>
    <style id="__jsx-3523810660">
        .slider-container.jsx-3523810660 {
            overflow: hidden;
            white-space: nowrap
        }

        .slider-content-wrapper.jsx-3523810660 {
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            -webkit-animation: slide 100s linear infinite;
            animation: slide 100s linear infinite
        }

        .slider-content-wrapper.jsx-3523810660>div.jsx-3523810660 {
            display: inline-block
        }

        @keyframes slide {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }

            to {
                -webkit-transform: translate3d(-50%, 0, 0);
                -moz-transform: translate3d(-50%, 0, 0);
                -ms-transform: translate3d(-50%, 0, 0);
                transform: translate3d(-50%, 0, 0)
            }
        }
    </style>
    <style id="__jsx-35b41a4c7de73e00">
        .company-slider.jsx-35b41a4c7de73e00 {
            margin-top: 2rem;
            margin-bottom: 4rem
        }

        .company-logos-container.jsx-35b41a4c7de73e00 {
            white-space: nowrap;
            overflow: hidden
        }

        .company-logos-container.jsx-35b41a4c7de73e00>div.jsx-35b41a4c7de73e00 {
            display: inline-block;
            padding: 0 2.2rem;
            vertical-align: middle;
            opacity: 0.25;
            outline: none;
            cursor: default;
            -webkit-transition: opacity 0.2s ease;
            transition: opacity 0.2s ease
        }

        .company-logos-container.jsx-35b41a4c7de73e00>div.jsx-35b41a4c7de73e00:hover {
            opacity: 0.8
        }
    </style>
    <style id="__jsx-657655842">
        div.jsx-657655842 {
            width: 100%;
            margin: 0 auto;
            padding: 6.25rem 0;
            text-align: center;
            background-color: #fafafa;
            border-top: 1px solid #eaeaea;
            border-bottom: 1px solid #eaeaea;
        }

        div.jsx-657655842:after {
            content: '';
            display: table;
            clear: both
        }

        @media screen and (max-width:960px) {
            div.jsx-657655842 {
                padding: 4rem 0;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-657655842 {
                padding: 4rem 0;
            }
        }
    </style>
    <style id="__jsx-f3df9ffcc86261d9">
        .slider-wrapper.jsx-f3df9ffcc86261d9 {
            padding: 16px;
            background-color: #fff;
            box-shadow: 0px 30px 60px rgba(0, 0, 0, 0.12);
            border-radius: 6px;
            max-width: 450px;
            height: 72px;
            margin: 0 auto
        }

        .content.jsx-f3df9ffcc86261d9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            width: 100%
        }

        .slider.jsx-f3df9ffcc86261d9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 140px;
            position: relative
        }

        .slide.jsx-f3df9ffcc86261d9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-animation: 3s ease-in-out;
            animation: 3s ease-in-out;
            opacity: 0;
            height: 40px
        }

        .slide.active.jsx-f3df9ffcc86261d9 {
            -webkit-animation-name: fade;
            animation-name: fade
        }

        .slide.jsx-f3df9ffcc86261d9:only-child {
            opacity: 1
        }

        .slide.jsx-f3df9ffcc86261d9:not(:last-child) {
            padding-right: 20px
        }

        @keyframes fade {
            0% {
                opacity: 0
            }

            25%,
            75% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @media (max-width:640px) {
            .slider-wrapper.jsx-f3df9ffcc86261d9 {
                width: 90%;
                max-width: 100%;
                padding: 16px;
                height: auto
            }

            .content.jsx-f3df9ffcc86261d9 {
                width: 100%;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column
            }

            .slider.jsx-f3df9ffcc86261d9 {
                width: 100%;
                margin-bottom: 1rem
            }

            .action {
                width: 100%
            }
        }
    </style>
    <style id="__jsx-f4a06f0a19926459">
        .case-studies-box.jsx-f4a06f0a19926459 {
            position: relative;
            margin-top: -8.5rem;
            margin-bottom: 4rem
        }
    </style>
    <style id="__jsx-1583542119">
        h2.jsx-1583542119 {
            font-size: 2rem;
            letter-spacing: -1px;
            margin-bottom: 1rem;
            line-height: 1.3
        }

        div.jsx-1583542119 {
            position: relative;
            text-align: center;
            margin: 0 0 5rem 0
        }

        .anchor.jsx-1583542119 {
            position: absolute;
            top: -9rem
        }

        @media screen and (max-width:640px) {
            div.jsx-1583542119 {
                padding: 0 10px
            }
        }
    </style>
    <style id="__jsx-a348d6504527041b">
        .showcase-container.tablet.jsx-a348d6504527041b {
            position: relative;
            margin: 3rem 0 2rem;
            pointer-events: none;
            line-height: 0
        }

        .slides.jsx-a348d6504527041b {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap
        }

        .slide.jsx-a348d6504527041b {
            padding: 0.5rem;
            -webkit-flex: 1 1 33.33%;
            -ms-flex: 1 1 33.33%;
            flex: 1 1 33.33%
        }

        .tablet.jsx-a348d6504527041b img,
        .tablet.jsx-a348d6504527041b amp-img {
            max-width: 100%;
            border-radius: 5px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1)
        }

        .overlay.jsx-a348d6504527041b {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 2;
            bottom: -2rem;
            background: linear-gradient(to bottom, rgba(250, 250, 250, 0) 30%, rgba(250, 250, 250, 0.7) 90%, rgba(250, 250, 250, 1) 100%)
        }

        @media screen and (max-width:640px) {
            .slide.jsx-a348d6504527041b {
                -webkit-flex: 1 1 100%;
                -ms-flex: 1 1 100%;
                flex: 1 1 100%
            }
        }

        @media screen and (min-width:960px) {
            .showcase-container.tablet.jsx-a348d6504527041b {
                display: none
            }
        }
    </style>
    <style id="__jsx-1556259931">
        .showcase-container.desktop.jsx-1556259931 {
            display: none;
            margin: 4rem auto 2rem auto;
            overflow-x: hidden
        }

        .slides.jsx-1556259931 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            max-width: 100vw;
            margin: 50px 0 0
        }

        .slides.jsx-1556259931 *.jsx-1556259931::selection {
            background-color: transparent
        }

        .shadow.jsx-1556259931 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            height: 100%;
            color: white;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3));
            -webkit-transition: opacity 0.2s ease;
            transition: opacity 0.2s ease;
            opacity: 0
        }

        .info.jsx-1556259931 {
            position: absolute;
            width: 100%;
            bottom: 0;
            padding: 1rem;
            text-align: center;
            color: white;
            background: rgba(0, 0, 0, 0.8);
            -webkit-transition: opacity 0.6s ease;
            transition: opacity 0.6s ease;
            opacity: 0
        }

        .slide.jsx-1556259931:hover .shadow.jsx-1556259931 {
            opacity: 1
        }

        .slide.jsx-1556259931:hover .info.jsx-1556259931 {
            opacity: 1
        }

        .slide.jsx-1556259931 {
            width: 330px;
            height: 185px;
            margin: 0 calc(7.142857142857143vw - 165px);
            border-radius: 7px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08), 0 5px 12px rgba(0, 0, 0, 0.1);
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
            cursor: pointer;
            overflow: hidden;
            background: white
        }

        .slide.jsx-1556259931:hover {
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2)
        }

        .desktop.jsx-1556259931 .slide.jsx-1556259931:hover img,
        .desktop.jsx-1556259931 .slide.jsx-1556259931:hover amp-img {
            opacity: 1
        }

        .desktop.jsx-1556259931 .slide.jsx-1556259931 img,
        .desktop.jsx-1556259931 amp-img {
            width: 100%;
            opacity: 0.8;
            -webkit-transition: opacity 0.5s ease;
            transition: opacity 0.5s ease
        }

        @media screen and (min-width:960px) {
            .showcase-container.desktop.jsx-1556259931 {
                display: block
            }
        }
    </style>
    <style id="__jsx-1109413824">
        h2.jsx-1109413824 {
            font-size: 2rem;
            letter-spacing: -1px;
            margin-bottom: 1rem;
            line-height: 1.3
        }

        div.jsx-1109413824 {
            position: relative;
            text-align: center;
            margin: 0 0 2rem 0
        }

        .anchor.jsx-1109413824 {
            position: absolute;
            top: -9rem
        }

        @media screen and (max-width:640px) {
            div.jsx-1109413824 {
                padding: 0 10px
            }
        }
    </style>
    <style id="__jsx-3325794973">
        div.jsx-3325794973 {
            width: 100%;
            margin: 0 auto;
            padding: 6.25rem 0;
            text-align: center;
        }

        div.jsx-3325794973:after {
            content: '';
            display: table;
            clear: both
        }

        @media screen and (max-width:960px) {
            div.jsx-3325794973 {
                padding: 4rem 0;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-3325794973 {
                padding: 4rem 0;
            }
        }
    </style>
    <style id="__jsx-3410742370">
        .input.jsx-3410742370 {
            position: relative;
            width: 100%;
            margin: 0 auto;
            height: 37px;
            line-height: 37px
        }

        .suggestion-wrap.jsx-3410742370 {
            margin-top: -37px;
            position: absolute;
            width: 100%;
            text-align: left;
            overflow: hidden
        }

        .suggestion.jsx-3410742370 {
            font-size: 14px;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            height: 37px;
            line-height: 37px;
            display: inline-block;
            position: relative;
            color: transparent
        }

        .ios.jsx-3410742370 .suggestion.jsx-3410742370 {
            font-size: 16px;
            top: 2px
        }

        .suggestion.jsx-3410742370 .completion.jsx-3410742370 {
            color: #999;
            position: absolute;
            height: 37px;
            line-height: 37px;
            display: inline-block
        }

        .suggestion.jsx-3410742370 .prefix.jsx-3410742370 {
            height: 37px;
            line-height: 37px;
            display: inline-block;
            z-index: -1
        }

        .ff.jsx-3410742370 .suggestion.jsx-3410742370 .completion.jsx-3410742370,
        .ff.jsx-3410742370 .suggestion.jsx-3410742370 .prefix.jsx-3410742370 {
            height: 36px;
            line-height: 36px
        }
    </style>
    <style id="__jsx-3711437907">
        form.jsx-3711437907 {
            display: inline-block;
            position: relative;
            max-width: 100%
        }

        form.jsx-3711437907>div.jsx-3711437907 {
            width: 240px;
            max-width: 100%
        }

        form.jsx-3711437907>div.flex.jsx-3711437907 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            width: 490px;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .email.jsx-3711437907 {
            text-align: center;
            margin: auto;
            -webkit-transition: border-bottom-color 100ms ease-in, color 100ms ease-in;
            transition: border-bottom-color 100ms ease-in, color 100ms ease-in;
            width: 100%
        }

        .email.loading.jsx-3711437907 {
            border-bottom-color: #888
        }

        .email.jsx-3711437907 button {
            height: 45px;
            margin: 10px 0;
            margin-bottom: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            font-weight: 500;
            width: 100%;
            background-color: #000;
            color: #fff;
            border: 1px solid #000
        }

        .email.jsx-3711437907 button:focus,
        .email.jsx-3711437907 button:hover {
            background-color: transparent;
            border-color: #000;
            color: #000;
            outline: none
        }

        .email.error.jsx-3711437907 label.jsx-3711437907 {
            border-color: red
        }

        label.jsx-3711437907 {
            background-color: transparent;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            border-radius: 8px;
            border: 1px solid #999;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 auto;
            width: 100%
        }

        .focus.jsx-3711437907 label.jsx-3711437907 {
            background: none;
            -webkit-transition: border-color 100ms ease-in;
            transition: border-color 100ms ease-in;
            border-color: #333
        }

        .error.jsx-3711437907 label.jsx-3711437907 {
            border-color: red
        }

        .icon.jsx-3711437907 {
            margin: 0 14px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        input.jsx-3711437907 {
            background-color: transparent;
            border: none;
            border-radius: 0;
            box-sizing: border-box;
            color: #000;
            display: block;
            text-align: left;
            font-size: 14px;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            padding: 4px 0;
            margin: 0 auto;
            height: 37px;
            line-height: 27px;
            width: 100%;
            box-shadow: none
        }

        .ios.jsx-3711437907 input.jsx-3711437907 {
            font-size: 16px;
            height: 34px;
            padding-bottom: 4px
        }

        .focus.jsx-3711437907 {
            border-bottom-color: #fff
        }

        input.jsx-3711437907::placeholder {
            color: #999;
            -webkit-transition: color 100ms ease-in;
            transition: color 100ms ease-in
        }

        input.jsx-3711437907:focus::placeholder {
            color: #999
        }

        input.jsx-3711437907:focus {
            outline: none
        }

        input.jsx-3711437907:disabled {
            color: #666
        }

        input.jsx-3711437907::-ms-clear {
            display: none
        }

        .shaking.jsx-3711437907 {
            -webkit-animation: shake 1s both;
            animation: shake 1s both
        }

        .loading_anim.jsx-3711437907 {
            display: block;
            position: absolute;
            bottom: 0px;
            background: #eee;
            width: 100%;
            height: 1px;
            -webkit-animation-name: waiting;
            animation-name: waiting;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            animation-direction: alternate;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);
            animation-timing-function: cubic-bezier(0, 0, 1, 1)
        }

        .inverse.jsx-3711437907 .loading_anim.jsx-3711437907 {
            background: #9b9b9b
        }

        @keyframes waiting {
            0% {
                left: 0;
                width: 50px;
                opacity: 0
            }

            50% {
                width: 100px;
                opacity: 1;
                left: 50%
            }

            100% {
                width: 50px;
                opacity: 0;
                left: calc(100% - 50px)
            }
        }

        .label.jsx-3711437907 {
            color: #d6d6d6;
            font-size: 12px;
            margin-bottom: 40px;
            text-align: center
        }

        .error-message.jsx-3711437907 {
            position: absolute;
            color: red;
            text-align: center;
            font-size: 12px;
            width: 110%;
            margin: 0;
            margin-left: -5%;
            margin-top: 0.5rem
        }

        .error-message.jsx-3711437907 span.jsx-3711437907 {
            position: relative;
            padding-left: 20px
        }

        .error-message.jsx-3711437907 span.jsx-3711437907::before {
            display: block;
            content: '';
            width: 11px;
            background: red;
            border-radius: 2px;
            height: 11px;
            position: absolute;
            left: 0;
            top: 1px
        }

        .submit.jsx-3711437907 {
            background: #fff;
            margin: 0 auto;
            display: block;
            width: 200px;
            height: 50px;
            border: 2px solid #000;
            text-transform: uppercase;
            font-size: 12px;
            margin-bottom: 50px;
            font-weight: bold
        }

        @keyframes shake {

            0%,
            100% {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                -moz-transform: translate3d(-10px, 0, 0);
                -ms-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0)
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                -moz-transform: translate3d(10px, 0, 0);
                -ms-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0)
            }
        }

        @media (max-width:700px) {
            form.jsx-3711437907>div.flex.jsx-3711437907 {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                width: 80vw;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                justify-content: space-between
            }
        }
    </style>
    <style id="__jsx-1dbba7577b9c45b1">
        .content.jsx-1dbba7577b9c45b1 {
            display: grid;
            grid-template-columns: 1fr 0.8fr;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 2rem auto;
            padding: 0 1.5rem;
            max-width: 1024px
        }

        .content.jsx-1dbba7577b9c45b1 h2.jsx-1dbba7577b9c45b1 {
            font-size: 2rem;
            letter-spacing: -1px;
            line-height: 1.2;
            text-align: left;
            margin-bottom: 0.8rem
        }

        .content.jsx-1dbba7577b9c45b1 h3.jsx-1dbba7577b9c45b1 {
            font-size: 1rem;
            line-height: 1.8;
            text-align: left;
            font-weight: 400
        }

        .email-form.jsx-1dbba7577b9c45b1 {
            text-align: right;
            position: relative
        }

        .subscribe-success.jsx-1dbba7577b9c45b1 {
            text-align: right
        }

        @media screen and (max-width:640px) {
            .content.jsx-1dbba7577b9c45b1 {
                display: grid;
                grid-template-columns: 1fr
            }

            .content.jsx-1dbba7577b9c45b1 h2.jsx-1dbba7577b9c45b1,
            .content.jsx-1dbba7577b9c45b1 h3.jsx-1dbba7577b9c45b1 {
                text-align: center
            }

            .email-form.jsx-1dbba7577b9c45b1 {
                margin: auto;
                margin-top: 2rem;
                text-align: center
            }

            .subscribe-success.jsx-1dbba7577b9c45b1 {
                text-align: center
            }
        }
    </style>
    <style id="__jsx-114819287">
        div.jsx-114819287 {
            width: 100%;
            margin: 0 auto;
            padding: 0 0;
            background-color: #fafafa;
            border-top: 1px solid #eaeaea;
            border-bottom: 1px solid #eaeaea;
            overflow: hidden;
        }

        div.jsx-114819287:after {
            content: '';
            display: table;
            clear: both
        }

        @media screen and (max-width:960px) {
            div.jsx-114819287 {
                padding: 0 0;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-114819287 {
                padding: 0 0;
            }
        }

        @media screen and (max-width:640px) {
            div.jsx-4177912742 {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                font-size: 15px;
                font-family: 'Space Grotesk', sans-serif;
            }
        }

        .mute:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    <div id="osef">
                <header class="jsx-3610867073 sticky">
                    <div class="jsx-2308493473 "><a tabindex="0" href="#reach-skip-nav" data-reach-skip-link="true">Skip
                            to content</a>
                        <h1 aria-hidden="true" class="jsx-4177912742 visually-hidden">Next.js</h1>
                        <nav class="jsx-4177912742 f-reset">
                            <div class="jsx-4177912742 mobile-top">
                                <a title="Showcase" class="jsx-4177912742 mute" href="/index.php?page=0">Accueil</a>
                                <a title="Documentation" class="jsx-4177912742 mute" href="/index.php?page=5">Boutique</a>
                                <a class="jsx-4177912742 mute" href="/index.php?page=13">Roadmap</a>
                                <a class="jsx-4177912742 mute" href="/admin">Admin</a>
                                <a class="jsx-4177912742 mute" href="/login/">Profil</a>
                            </div>
                            <div class="jsx-4177912742 links">
                                <a title="Showcase" class="jsx-4177912742 mute" href="/index.php?page=0">Accueil</a>
                                <a title="Documentation" class="jsx-4177912742 mute" href="/index.php?page=5">Boutique</a>
                                <a class="jsx-4177912742 mute" href="/index.php?page=13">Roadmap</a>
                                <a class="jsx-4177912742 mute" href="/admin">Admin</a>
                                <a class="jsx-4177912742 mute" href="/login/">Profil</a>
                            </div>
                        </nav>
                    </div>
                </header>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
</body>
</html>