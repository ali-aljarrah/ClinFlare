<?php include './include/header.php'; ?>
<title>ClingFlare - Bot detection</title>
<meta name="description"
    content="clingflare. Bot Detection detects automation tools, search bots and other sophisticated threats. Add the capability to your website with only a few lines of JavaScript.">
<link rel="canonical" href="https://www.clingflare.com/bot_detection">
<meta property="og:title" content="ClingFlare - Bot detection">
<meta property="og:description"
    content="clingflare. Bot Detection detects automation tools, search bots and other sophisticated threats. Add the capability to your website with only a few lines of JavaScript.">
<link rel="preload" as="style" onload='this.rel="stylesheet"' href="/assets/css/prism.css">
</head>

<body>
    <?php include './include/loader.php'; ?>
    <?php include './include/menu.php'; ?>

    <section class="py-3 py-md-5 mt-5">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div>
                        <h1 class="secondary-color pages-header syne-font fw-bolder mb-4">
                        Detect sophisticated bots
                        </h1>
                        <p class="fs-16 dark-color">
                        <span class="fw-600">clingflare.'s</span> Bot Detection detects automation tools, search bots and other sophisticated threats. Add the capability to your website with only a few lines of JavaScript.
                        </p>
                        <div class="bg-container justify-content-start mt-5">
                            <p class="mb-0 fs-14 secondary-color">
                            Note: If you have our SDKs or JS Agents already installed, there are no additional lines of code to add.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img width="435" height="322" loading="lazy" class="img-fluid" src="/assets/images/platform/bot/bot-1.webp" alt="ClingFlare Detect sophisticated bots">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-md-5 my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="pe-0 pe-md-5">
                        <h2 class="fs-36 syne-font secondary-color fw-bold mb-3 mt-3">
                        Get started with bot <br />detection
                        </h2>
                        <p class="fs-16 dark-color">
                        Enterprise customers can get started with Bot Detection right away - enter your email to get in contact with our team. Otherwise, we will add you to our waitlist.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 rounded-5 dark-blue-bg py-4 px-3">
                        <ul class="nav nav-tabs border-0 custom-tab" id="botTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="cdn-tab" data-bs-toggle="tab" data-bs-target="#cdn-tab-pane" type="button" role="tab" aria-controls="cdn-tab-pane" aria-selected="true">CDN</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="npm-tab" data-bs-toggle="tab" data-bs-target="#npm-tab-pane" type="button" role="tab" aria-controls="npm-tab-pane" aria-selected="false">NPM</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="botTabContent">
                            <div class="tab-pane fade show active position-relative" id="cdn-tab-pane" role="tabpanel" aria-labelledby="cdn-tab" tabindex="0">
                                <a href="#" class="copyElement">
                                    Copy
                                </a>  
                            <pre class="rounded-5 dark-blue-bg"><code class="language-js">// Initialize the agent at application startup.
const cfPromise = import('https://clingflare.com/api/<api-key>')
  .then(ClingFlareJS => ClingFlareJS.load())

cfPromise
  .then(cf => cf.get())
  .then(result => {
    // Result will contain the requestId property,
    // that you can securely verify on the server.
    const requestId = result.requestId
    console.log(requestId)
})</code></pre>
                            </div>
                            <div class="tab-pane fade position-relative" id="npm-tab-pane" role="tabpanel" aria-labelledby="npm-tab" tabindex="0">
                                <a href="#" class="copyElement">
                                    Copy
                                </a> 
                            <pre class="rounded-5 dark-blue-bg"><code class="language-js">import ClingFlareJS from '@clingflarejs/clingflarejs-pro'

// Initialize an agent at application startup.
const cfPromise = ClingFlareJS.load({
  apiKey: <api-key>
})

cfPromise
  .then(cf => cf.get())
  // Result will contain the requestId property,
  // that you can securely verify on the server.
  .then(result => console.log(result.requestId))</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="py-3 py-md-5 my-5">
        <div class="container">
        <div class="row mt-5 pt-5">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="h-100 rounded-5 dark-blue-bg py-4 px-3">
                        <div class="position-relative">
                            <a href="#" class="copyElement">
                                Copy
                            </a> 
                        <pre class="rounded-5 dark-blue-bg"><code class="language-js">
{
    "products": {
        "botd": {
            "data": {
                "bot": {
                    "result": "notDetected"
                    "type": 
                },
                "ip": "5.155.91.230",
                "time": "2023-06-09T10:38:45.311Z",
                "url": "https://clingflare.com/",
                "userAgent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
                "requestId": "1686307125295.gC9ci2"
            }
        }
    }
}</code></pre>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4 mb-md-0 order-1 order-md-2">
                    <div class="ps-0 ps-md-5">
                        <h3 class="fs-36 syne-font secondary-color fw-bold mb-3 mt-4">
                        clingflare. provides a singular response with three available parameters.
                        </h3>
                        <p class="fs-16 dark-color">
                        "Good" if the bot is a search engine or friendly crawler, "Bad" if the bot is an automated tool or virtual machine, and "Not Detected" if the visitor is not considered a bot.
                        </p>
                        <div class="mt-5">
                            <a class="red-button" href="#">
                                <span class="me-1">Learn more</span>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 5.5H18.5V14.5" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.77197 18.2279L18.4999 5.5" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-md-5 my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div>
                        <div>
                            <img width="445" height="181" loading="lazy" class="img-fluid" src="/assets/images/platform/bot/bot-2.webp" alt="ClingFlare Developer-friendly bot detection">
                        </div>
                        <h3 class="mt-4 fs-36 secondary-color syne-font fw-bold">
                        Developer-friendly bot <br />detection
                        </h3>
                        <div class="mt-4">
                            <a class="red-button" href="#">
                                <span class="me-1">Read documentation</span>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 5.5H18.5V14.5" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.77197 18.2279L18.4999 5.5" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-start align-items-start border-hover-green mb-4">
                        <div class="me-3">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="#E9EEF2"/>
                                <path d="M13 30H27C27.5523 30 28 29.5523 28 29V15H23V10H13C12.4477 10 12 10.4477 12 11V29C12 29.5523 12.4477 30 13 30Z" fill="#DD4536" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23 10L28 15" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 20.5H20H23.5" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 23.5H20H23.5" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.5 18.5V25.5" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.5 18.5V25.5" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fs-18 fw-bold secondary-color syne-font mb-2">
                            Extensive documentation
                            </h4>
                            <p class="fs-16 dark-color mb-0">
                            Our docs are written for developers - easy to read, easier to implement.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-start border-hover-green mb-4">
                        <div class="me-3">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="#E9EEF2"/>
                                <path d="M17.5 10H26.5L21 17H28.5L16.5 30L19 20.5H12L17.5 10Z" fill="#DD4536" stroke="#1F2253" stroke-width="2" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fs-18 fw-bold secondary-color syne-font mb-2">
                            Lightweight agent
                            </h4>
                            <p class="fs-16 dark-color mb-0">
                            Minimal page speed impact, keeping your website fast.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-start border-hover-green mb-4">
                        <div class="me-3">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="#E9EEF2"/>
                                <path d="M19.5 28H11.5C10.6716 28 10 27.3285 10 26.5V13.5C10 12.6716 10.6716 12 11.5 12H28.5C29.3285 12 30 12.6716 30 13.5V20.9412" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 13.5C10 12.6716 10.6716 12 11.5 12H28.5C29.3284 12 30 12.6716 30 13.5V18H10V13.5Z" fill="#DD4536" stroke="#1F2253" stroke-width="2"/>
                                <path d="M25 24.5L23 26.5L25 28.5" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28 24.5L30 26.5L28 28.5" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 15C12 14.4477 12.4477 14 13 14C13.5523 14 14 14.4477 14 15C14 15.5523 13.5523 16 13 16C12.4477 16 12 15.5523 12 15Z" fill="#E9EEF2"/>
                                <path d="M15 15C15 14.4477 15.4477 14 16 14C16.5523 14 17 14.4477 17 15C17 15.5523 16.5523 16 16 16C15.4477 16 15 15.5523 15 15Z" fill="#E9EEF2"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="fs-18 fw-bold secondary-color syne-font mb-2">
                            Open-source powered
                            </h4>
                            <p class="fs-16 dark-color mb-0">
                            Open-source JavaScript agent and Cloud integrations that are actively supported.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-md-5 my-5">
        <div class="container">
            <div class="text-center">
                <h4 class="fs-36 secondary-color fw-bold syne-font">
                Stop advanced bots <br />with clingflare.
                </h4>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="border-card-hover w-fit h-100">
                        <div>
                            <img width="159" height="107" class="img-fluid" loading="lazy" src="/assets/images/platform/bot/bot-3.webp" alt="ClingFlare Malicious bots">
                        </div>
                        <h5 class="fs-18 secondary-color syne-font fw-bold mt-3">
                        Malicious bots
                        </h5>
                        <p class="mt-3 fs-16 dark-color mb-0">
                        Identify and continuously detect the most advanced bots around, and more importantly, bots attempting to emulate human traffic patterns and heuristics.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="border-card-hover w-fit h-100">
                        <div>
                            <img width="159" height="107" class="img-fluid" loading="lazy" src="/assets/images/platform/bot/bot-4.webp" alt="ClingFlare Automation tools">
                        </div>
                        <h5 class="fs-18 secondary-color syne-font fw-bold mt-3">
                        Automation tools
                        </h5>
                        <p class="mt-3 fs-16 dark-color mb-0">
                        Detect automatic access to your site by commonly used technologies like selenium, puppeteer, playwright, and more.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="border-card-hover w-fit h-100">
                        <div>
                            <img width="159" height="107" class="img-fluid" loading="lazy" src="/assets/images/platform/bot/bot-5.webp" alt="ClingFlare Search bots">
                        </div>
                        <h5 class="fs-18 secondary-color syne-font fw-bold mt-3">
                        Search bots
                        </h5>
                        <p class="mt-3 fs-16 dark-color mb-0">
                        Identify search bots so you can let them crawl your web app unhindered, keeping your SEO rankings high across Google, Bing, Yahoo, Yandex and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-md-5 my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="pe-0 pe-md-5">
                        <h4 class="fs-36 secondary-color syne-font fw-bold mb-4">
                        Protect your website from the harmful effects of bots
                        </h4>
                        <p class="fs-16 dark-color">
                        Bots represent more than 40% of global website traffic and are responsible for the majority of cyberattacks. Bot attacks regularly cause data breaches, service outages and orchestrate account takeovers.
                        </p>
                        <p class="fs-16 dark-color">
                        It is incredibly easy to spin up a bot farm that will use thousands of VMs to scan for critical information, perform XSS attacks and inject crypto-mining scripts, posing an existential risk to small and established websites alike.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-start align-items-start border-hover-green mb-4">
                        <div class="me-3">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="#E9EEF2"/>
                                <path d="M13.6316 30L15.3135 25.8426C13.0155 24.2967 11.5 21.6463 11.5 18.6363C11.5 13.8666 15.3056 10 20 10C24.6944 10 28.5 13.8666 28.5 18.6363C28.5 21.6463 26.9845 24.2967 24.6864 25.8426L26.3684 30H13.6316Z" fill="#DD4536" stroke="#1F2253" stroke-width="2" stroke-linejoin="round"/>
                                <path d="M18 27V30" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 27V30" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 19.5C17.3284 19.5 18 18.8284 18 18C18 17.1715 17.3284 16.5 16.5 16.5C15.6715 16.5 15 17.1715 15 18C15 18.8284 15.6715 19.5 16.5 19.5Z" fill="#DD4536" stroke="#E9EEF2" stroke-width="2" stroke-linejoin="round"/>
                                <path d="M23.5 19.5C24.3284 19.5 25 18.8284 25 18C25 17.1715 24.3284 16.5 23.5 16.5C22.6715 16.5 22 17.1715 22 18C22 18.8284 22.6715 19.5 23.5 19.5Z" fill="#DD4536" stroke="#E9EEF2" stroke-width="2" stroke-linejoin="round"/>
                                <path d="M24 30H20" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 30H16" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h5 class="fs-18 fw-bold secondary-color syne-font mb-2">
                            Fraud
                            </h5>
                            <p class="fs-16 dark-color mb-0">
                            Malicious actors can easily buy login credentials and credit card numbers on the dark web, and test them on unsuspecting websites using bot farms. Identify automated attackers and lock them out before they can hijack customer accounts or make fraudulent purchases.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-start border-hover-green mb-4">
                        <div class="me-3">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="#E9EEF2"/>
                                <path d="M26.5 16.5H13.5C12.9477 16.5 12.5 16.9477 12.5 17.5V28.5C12.5 29.0523 12.9477 29.5 13.5 29.5H26.5C27.0523 29.5 27.5 29.0523 27.5 28.5V17.5C27.5 16.9477 27.0523 16.5 26.5 16.5Z" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.5 12.5L22 16.5" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.5 12.5L18 16.5" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25 12.5C25.5523 12.5 26 12.0523 26 11.5C26 10.9477 25.5523 10.5 25 10.5C24.4477 10.5 24 10.9477 24 11.5C24 12.0523 24.4477 12.5 25 12.5Z" stroke="#1F2253" stroke-width="2"/>
                                <path d="M15 12.5C15.5523 12.5 16 12.0523 16 11.5C16 10.9477 15.5523 10.5 15 10.5C14.4477 10.5 14 10.9477 14 11.5C14 12.0523 14.4477 12.5 15 12.5Z" stroke="#1F2253" stroke-width="2"/>
                                <path d="M22 20H18C16.8954 20 16 20.8954 16 22C16 23.1046 16.8954 24 18 24H22C23.1046 24 24 23.1046 24 22C24 20.8954 23.1046 20 22 20Z" fill="#DD4536" stroke="#1F2253" stroke-width="2"/>
                                <path d="M12.5 20H10V25H12.5" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.5 20H30V25H27.5" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h5 class="fs-18 fw-bold secondary-color syne-font mb-2">
                            Cyberattacks
                            </h5>
                            <p class="fs-16 dark-color mb-0">
                            2021 was the worst year on record for infrastructure outages caused by ransomware attacks. Beyond the headlines, cyberattackers are not only targeting public-facing websites, but internal portals and dashboards in order to hold businesses hostage. These cyberattacks require careful planning and execution, which you can predict by using bot monitoring on every web application that your company is using.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-start border-hover-green mb-4">
                        <div class="me-3">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="#E9EEF2"/>
                                <path d="M30 20V28.4091C30 29.0116 29.5523 29.5 29 29.5H11C10.4477 29.5 10 29.0116 10 28.4091V20L20 26.5L30 20Z" stroke="#1F2253" stroke-width="2" stroke-linejoin="round"/>
                                <path d="M10 19.892L15 16.446M30 19.892L25 16.446" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25 10.5H15V22.7073C15 23.0458 15.1712 23.3613 15.455 23.5457L19.455 26.1458C19.7864 26.3611 20.2136 26.3611 20.545 26.1458L24.545 23.5457C24.8288 23.3613 25 23.0458 25 22.7073V10.5Z" fill="#DD4536" stroke="#1F2253" stroke-width="2" stroke-linejoin="round"/>
                                <path d="M18 14.5H20" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18 17.5H22" stroke="#E9EEF2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h5 class="fs-18 fw-bold secondary-color syne-font mb-2">
                            Fake reviews
                            </h5>
                            <p class="fs-16 dark-color mb-0">
                            Positive online reviews are worth their word count in gold. Stop businesses from generating fake reviews using bot networks, and protect the reputation of your online marketplace.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-start border-hover-green mb-4">
                        <div class="me-3">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="#E9EEF2"/>
                                <path d="M21.5 28H11.5C10.6716 28 10 27.3285 10 26.5V13.5C10 12.6716 10.6716 12 11.5 12H28.5C29.3285 12 30 12.6716 30 13.5V20" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M25 26L27.5 28.5L30 26" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M27.5 22.5V28.5" stroke="#1F2253" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 13.5C10 12.6716 10.6716 12 11.5 12H28.5C29.3284 12 30 12.6716 30 13.5V18H10V13.5Z" fill="#DD4536" stroke="#1F2253" stroke-width="2"/>
                                <path d="M12 15C12 14.4477 12.4477 14 13 14C13.5523 14 14 14.4477 14 15C14 15.5523 13.5523 16 13 16C12.4477 16 12 15.5523 12 15Z" fill="#E9EEF2"/>
                                <path d="M15 15C15 14.4477 15.4477 14 16 14C16.5523 14 17 14.4477 17 15C17 15.5523 16.5523 16 16 16C15.4477 16 15 15.5523 15 15Z" fill="#E9EEF2"/>
                            </svg>
                        </div>
                        <div>
                            <h5 class="fs-18 fw-bold secondary-color syne-font mb-2">
                            Scraping
                            </h5>
                            <p class="fs-16 dark-color mb-0">
                            Whether it's vacation rentals listings or airline prices, content scraping is a headache that's impossible to solve by conventional blocking techniques. You need real-time bot protection for content scrambling and data poisoning to stay ahead of the scrape.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './include/footer.php'; ?>
    <script src="/assets/js/prism.js" defer></script>

</body>

</html>