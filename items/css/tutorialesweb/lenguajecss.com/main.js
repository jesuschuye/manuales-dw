class t extends HTMLElement{constructor(){super(),this.attachShadow({mode:"open"})}static get styles(){return"\n      :host {\n        --font-size: 1rem;\n        --padding: 10px 40px;\n\n        user-select: none;\n      }\n\n      @media screen and (max-width: 900px) {\n        :host {\n          --font-size: 1.4rem;\n          --padding: 20px 40px;\n        }\n      }\n\n      details {\n        background: var(--sidebar-background-color);\n        color: #aac;\n        font-size: var(--font-size);\n      }\n\n      summary {\n        padding: var(--padding);\n        transition: background 0.5s;\n        cursor: pointer;\n      }\n\n      summary:hover {\n        background: var(--sidebar-hover-color);\n      }\n\n      summary::marker {\n        content: none;\n      }\n\n      summary::after {\n        content: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMDAgMjAwIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiPjxwYXRoIGQ9Ik0xMzUgMCAzNiAxMDBsMTAwIDEwMCAyOC0yOC03Mi03MiA3Mi03MnoiIGZpbGw9IiNhYWMiIC8+PC9zdmc+');\n        float: right;\n        transform-origin: 50% 40%;\n        transform: rotate(180deg);\n        transition: transform 0.5s;\n      }\n\n      details[open] summary {\n        background: var(--sidebar-current-color);\n      }\n\n      details[open] summary::after {\n        transform: rotate(270deg);\n      }\n\n      details > div {\n        transition: height 0.5s;\n        height: 0;\n      }\n\n      details[open] > div {\n        height: 100%;\n      }\n    "}connectedCallback(){this.title=this.getAttribute("title"),this.href=this.getAttribute("href"),this.render(),this.checkOpen()}checkOpen(){new URL(location.href).pathname.includes(this.href)&&this.shadowRoot.querySelector("details").setAttribute("open",!0)}render(){this.shadowRoot.innerHTML=`\n      <style>${t.styles}</style>\n      <details>\n        <summary>\n          ${this.title}\n        </summary>\n        <div>\n          <slot></slot>\n        </div>\n      </details>\n    `}}customElements.define("sidebar-section",t);class n extends HTMLElement{constructor(){super(),this.attachShadow({mode:"open"})}static get styles(){return'\n      :host {\n        --font-size: 1rem;\n        --padding: 10px 40px 10px 50px;\n\n        user-select: none;\n      }\n\n      @media screen and (max-width: 900px) {\n        :host {\n          --font-size: 1.4rem;\n          --padding: 20px 40px;\n        }\n      }\n\n      :host([direct]) a {\n        background: var(--sidebar-background-color);\n        padding-left: 2.5em;\n        font-variation-settings: "wght" 70;\n        font-size: var(--font-size);\n        color: #aac;\n      }\n\n      :host([back]) a {\n        background: var(--sidebar-inner-color);\n        display: block;\n        padding-left: 2.5em;\n      }\n\n      :host([back]) a::before {\n        content: url(\'data:image/svg+xml;utf8,<svg viewBox="0 0 300 210" width="24" height="18" xmlns="http://www.w3.org/2000/svg"><path fill="%23AAC" d="M293 210c-2 0-5-1-6-3 0-1-28-53-146-55v52a6 6 0 0 1-10 5L2 110a6 6 0 0 1 0-9L131 2a6 6 0 0 1 10 5v55l12-1c44 0 146 14 146 143a6 6 0 0 1-6 6z"/></svg>\');\n        width: 26px;\n        height: 26px;\n        float: right;\n      }\n\n      .icon {\n        width: 45px;\n        height: 45px;\n        vertical-align: middle;\n        margin-right: 15px;\n      }\n\n      a {\n        display: flex;\n        text-decoration: none;\n        color: #fff;\n        padding: var(--padding);\n        background: var(--sidebar-inner-color);\n        transition: background 0.5s;\n      }\n\n      a > div {\n        display: flex;\n        flex-direction: column;\n      }\n\n      a i {\n        font-weight: normal;\n        color: #b12626;\n      }\n\n      a span {\n        font-variation-settings: "wght" 70;\n        font-size: 1rem;\n        color: #777;\n      }\n\n      a:hover:not(.current) {\n        background: var(--sidebar-hover-color);\n        transition: background 0.25s;\n      }\n\n      :host a.current {\n        background: var(--sidebar-active-color);\n        color: #000018;\n        font-weight: 800;\n        position: relative;\n      }\n\n      :host(.icon) a.current {\n        background: var(--sidebar-hover-color);\n      }\n\n      a.current::after {\n        content: "";\n        display: block;\n        background-image: var(--logo-image);\n        width: 32px;\n        height: 100%;\n        background-size: contain;\n        background-position: right center;\n        background-repeat: no-repeat;\n        position: absolute;\n        top: 0;\n        right: 35px;\n      }\n    '}connectedCallback(){this.title=this.getAttribute("title"),this.href=this.getAttribute("href"),this.beta=this.hasAttribute("beta"),this.render(),this.checkCurrent(),this.checkIcon()}checkIcon(){if(this.hasAttribute("icon")){const t=new URL(this.href),n=t.pathname.indexOf("/",2),e=t.pathname.substring(0,n),a=t.origin+e+"/logo.svg";this.shadowRoot.querySelector("a").insertAdjacentHTML("afterbegin",`<div><img class="icon" src="${a}" alt="${this.title}" /></div>`)}}checkCurrent(){const t=this.shadowRoot.querySelector("a");new URL(location.href).pathname===this.href&&t.classList.add("current"),this.hasAttribute("subtitle")&&(this.subtitle=this.getAttribute("subtitle"),t.innerHTML=`<div>${this.title} <span>${this.subtitle} ${this.beta?"<i>¡Draft!</i>":""}</span></div>`)}render(){this.shadowRoot.innerHTML=`\n      <style>${n.styles}</style>\n      <a href="${this.href}">${this.title}</a>\n    `}}customElements.define("sidebar-link",n);class e extends HTMLElement{constructor(){super(),this.attachShadow({mode:"open"})}static get styles(){return"\n      :host {\n        display: inline-block;\n        position: fixed;\n        width: 64px;\n        height: 64px;\n        border-radius: 50%;\n        bottom: -64px;\n        right: 2px;\n        transition:\n          bottom 1s,\n          right 1s;\n\n        background: white;\n        box-shadow: 0 0 25px 25px #fff9;\n      }\n\n      :host(.on) {\n        bottom: 0;\n      }\n\n      img.manz {\n        width: 64px;\n        max-width: 100%;\n        transform: translateY(6px) rotate(-5deg);\n        filter: drop-shadow(2px 2px 4px #0005);\n      }\n\n      .social-widget svg {\n        width: 25px;\n        position: fixed;\n        bottom: 0;\n        right: 15px;\n        transform: translate(0, 0);\n        opacity: 0;\n        transition:\n          opacity 1.5s 1s,\n          fill 0.25s,\n          transform 1.5s 1s;\n        cursor: pointer;\n        will-change: transform, opacity;\n      }\n\n      :host(.on) svg {\n        opacity: 1;\n      }\n\n      .social-widget .close { width: 12px; transform: translate(-75px, -95px); }\n\n      :host(.on) .instagram { transform: translate(-60px, -10px); }\n      :host(.on) .twitter { transform: translate(-55px, -45px); }\n      :host(.on) .twitch { transform: translate(-25px, -70px); }\n      :host(.on) .youtube { transform: translate(10px, -80px); }\n\n      :host(.on) .instagram:hover { fill: #e1306c; }\n      :host(.on) .twitter:hover { fill: #1da1f2; }\n      :host(.on) .twitch:hover { fill: #9146ff; }\n      :host(.on) .youtube:hover { fill: #ff0000; }\n\n      :host(.on) .close path { stroke:#999; stroke-width: 3px; stroke-linecap: butt; }\n      :host(.on) .close:hover path { stroke: #333; }\n    "}enable(){this.classList.add("on")}connectedCallback(){this.render(),this.shadowRoot.querySelector(".close").addEventListener("click",(()=>this.remove())),setTimeout((()=>this.enable()),1e3)}render(){this.shadowRoot.innerHTML=`\n    <style>${e.styles}</style>\n    <div class="social-widget">\n      <div class="icons">\n        <svg class="close" viewBox="0 0 14 14"><path d="M 1,1 14,14" /><path d="M 14,1 1,14" /></svg>\n        <a href="https://youtube.com/c/ManzDev?sub_confirmation=1" onclick="ga('send', 'event', 'corner', 'youtube')"><svg class="youtube" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>\n        <a href="https://twitter.com/Manz" onclick="ga('send', 'event', 'corner', 'twitter')"><svg class="twitter" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.06a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.936 4.936 0 0 0 4.604 3.417 9.867 9.867 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.59z"/></svg></a>\n        <a href="https://twitch.tv/ManzDev" onclick="ga('send', 'event', 'corner', 'twitch')"><svg class="twitch" viewBox="0 0 1024 1024"><path style="fill-opacity: 1; stroke: none; stroke-width: 1px; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;" d="m262.451 12.904-178.26 178.26v641.672h213.905v178.26l178.26-178.26h142.576L939.809 512V12.904H262.45zm35.645 71.287h570.383v392.164L725.904 618.932H583.287L458.514 743.705V618.932H298.096V84.192zM494.158 208.51v216.36h71.328V208.51h-71.328zm196 0v216.36h71.328V208.51h-71.328z"/></svg></a>\n        <a href="https://instagram.com/manz.dev" onclick="ga('send', 'event', 'corner', 'instagram')"><svg class="instagram" viewBox="0 0 24 24"><path d="M12 0H7C5.9.2 5 .4 4.2.7c-.7.3-1.4.7-2 1.4S.8 3.4.5 4.1c-.3.8-.5 1.7-.5 3a83.6 83.6 0 0 0 .5 12.8c.3.7.7 1.4 1.4 2 .7.8 1.3 1.2 2.1 1.5.8.3 1.7.5 3 .5a83.6 83.6 0 0 0 12.8-.5c.7-.3 1.4-.7 2-1.4.8-.7 1.2-1.3 1.5-2.1.3-.8.5-1.7.5-3a83.6 83.6 0 0 0-.5-12.8c-.3-.7-.7-1.4-1.4-2-.7-.8-1.3-1.2-2.1-1.5-.8-.3-1.7-.5-3-.5L12 0zm0 2.2h4.8c1.2 0 1.9.3 2.3.4.5.3 1 .5 1.4 1 .4.4.6.8.9 1.3.1.4.3 1 .4 2.2a84 84 0 0 1-.5 12c-.2.5-.4 1-.9 1.4-.4.4-.8.6-1.3.9-.5.1-1.1.3-2.3.4a84.5 84.5 0 0 1-12-.5c-.5-.2-.9-.4-1.3-.9-.4-.4-.7-.8-.9-1.3-.2-.5-.4-1.1-.4-2.3V7.1c0-1.1.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.3 2.2-.4H12zm0 3.6a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm7.8-10.4a1.4 1.4 0 1 1-2.8 0 1.4 1.4 0 0 1 2.8 0z"/></svg></a>\n      </div>\n      <a href="https://manz.dev/" onclick="ga('send', 'event', 'corner', 'manz.dev')"><img class="manz" src="https://manz.dev/manz-logo.png" alt="Manz logo"></a>\n    </div>`}}customElements.define("manz-widget",e);class a extends HTMLElement{constructor(){super(),this.attachShadow({mode:"open"})}connectedCallback(){this.color=this.getAttribute("hex"),this.style.setProperty("--color",this.color),this.render()}static get styles(){return"\n      .box {\n        display: inline-block;\n        border: 2px solid #000;\n        width: var(--size, 18px);\n        height: var(--size, 18px);\n        background: var(--color);\n        vertical-align: middle;\n      }\n    "}render(){this.shadowRoot.innerHTML=`\n      <style>${a.styles}</style>\n      <span class="box"></span>\n      <code>${this.color}</code>\n    `}}customElements.define("web-color",a);const o={edge:'<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Microsoft Edge</title><path d="M21.86 17.86q.14 0 .25.12.1.13.1.25t-.11.33l-.32.46-.43.53-.44.5q-.21.25-.38.42l-.22.23q-.58.53-1.34 1.04-.76.51-1.6.91-.86.4-1.74.64t-1.67.24q-.9 0-1.69-.28-.8-.28-1.48-.78-.68-.5-1.22-1.17-.53-.66-.92-1.44-.38-.77-.58-1.6-.2-.83-.2-1.67 0-1 .32-1.96.33-.97.87-1.8.14.95.55 1.77.41.82 1.02 1.5.6.68 1.38 1.21.78.54 1.64.9.86.36 1.77.56.92.2 1.8.2 1.12 0 2.18-.24 1.06-.23 2.06-.72l.2-.1.2-.05zm-15.5-1.27q0 1.1.27 2.15.27 1.06.78 2.03.51.96 1.24 1.77.74.82 1.66 1.4-1.47-.2-2.8-.74-1.33-.55-2.48-1.37-1.15-.83-2.08-1.9-.92-1.07-1.58-2.33T.36 14.94Q0 13.54 0 12.06q0-.81.32-1.49.31-.68.83-1.23.53-.55 1.2-.96.66-.4 1.35-.66.74-.27 1.5-.39.78-.12 1.55-.12.7 0 1.42.1.72.12 1.4.35.68.23 1.32.57.63.35 1.16.83-.35 0-.7.07-.33.07-.65.23v-.02q-.63.28-1.2.74-.57.46-1.05 1.04-.48.58-.87 1.26-.38.67-.65 1.39-.27.71-.42 1.44-.15.72-.15 1.38zM11.96.06q1.7 0 3.33.39 1.63.38 3.07 1.15 1.43.77 2.62 1.93 1.18 1.16 1.98 2.7.49.94.76 1.96.28 1 .28 2.08 0 .89-.23 1.7-.24.8-.69 1.48-.45.68-1.1 1.22-.64.53-1.45.88-.54.24-1.11.36-.58.13-1.16.13-.42 0-.97-.03-.54-.03-1.1-.12-.55-.1-1.05-.28-.5-.19-.84-.5-.12-.09-.23-.24-.1-.16-.1-.33 0-.15.16-.35.16-.2.35-.5.2-.28.36-.68.16-.4.16-.95 0-1.06-.4-1.96-.4-.91-1.06-1.64-.66-.74-1.52-1.28-.86-.55-1.79-.89-.84-.3-1.72-.44-.87-.14-1.76-.14-1.55 0-3.06.45T.94 7.55q.71-1.74 1.81-3.13 1.1-1.38 2.52-2.35Q6.68 1.1 8.37.58q1.7-.52 3.58-.52Z"/></svg>',firefox:'<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Mozilla Firefox</title><path d="M8.824 7.287c.008 0 .004 0 0 0zm-2.8-1.4c.006 0 .003 0 0 0zm16.754 2.161c-.505-1.215-1.53-2.528-2.333-2.943.654 1.283 1.033 2.57 1.177 3.53l.002.02c-1.314-3.278-3.544-4.6-5.366-7.477-.091-.147-.184-.292-.273-.446a3.545 3.545 0 01-.13-.24 2.118 2.118 0 01-.172-.46.03.03 0 00-.027-.03.038.038 0 00-.021 0l-.006.001a.037.037 0 00-.01.005L15.624 0c-2.585 1.515-3.657 4.168-3.932 5.856a6.197 6.197 0 00-2.305.587.297.297 0 00-.147.37c.057.162.24.24.396.17a5.622 5.622 0 012.008-.523l.067-.005a5.847 5.847 0 011.957.222l.095.03a5.816 5.816 0 01.616.228c.08.036.16.073.238.112l.107.055a5.835 5.835 0 01.368.211 5.953 5.953 0 012.034 2.104c-.62-.437-1.733-.868-2.803-.681 4.183 2.09 3.06 9.292-2.737 9.02a5.164 5.164 0 01-1.513-.292 4.42 4.42 0 01-.538-.232c-1.42-.735-2.593-2.121-2.74-3.806 0 0 .537-2 3.845-2 .357 0 1.38-.998 1.398-1.287-.005-.095-2.029-.9-2.817-1.677-.422-.416-.622-.616-.8-.767a3.47 3.47 0 00-.301-.227 5.388 5.388 0 01-.032-2.842c-1.195.544-2.124 1.403-2.8 2.163h-.006c-.46-.584-.428-2.51-.402-2.913-.006-.025-.343.176-.389.206-.406.29-.787.616-1.136.974-.397.403-.76.839-1.085 1.303a9.816 9.816 0 00-1.562 3.52c-.003.013-.11.487-.19 1.073-.013.09-.026.181-.037.272a7.8 7.8 0 00-.069.667l-.002.034-.023.387-.001.06C.386 18.795 5.593 24 12.016 24c5.752 0 10.527-4.176 11.463-9.661.02-.149.035-.298.052-.448.232-1.994-.025-4.09-.753-5.844z"/></svg>',chrome:'<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Google Chrome</title><path d="M12 0C8.21 0 4.831 1.757 2.632 4.501l3.953 6.848A5.454 5.454 0 0 1 12 6.545h10.691A12 12 0 0 0 12 0zM1.931 5.47A11.943 11.943 0 0 0 0 12c0 6.012 4.42 10.991 10.189 11.864l3.953-6.847a5.45 5.45 0 0 1-6.865-2.29zm13.342 2.166a5.446 5.446 0 0 1 1.45 7.09l.002.001h-.002l-5.344 9.257c.206.01.413.016.621.016 6.627 0 12-5.373 12-12 0-1.54-.29-3.011-.818-4.364zM12 16.364a4.364 4.364 0 1 1 0-8.728 4.364 4.364 0 0 1 0 8.728Z"/></svg>',safari:'<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Apple Safari</title><path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm0-.75c6.213 0 11.25-5.037 11.25-11.25S18.213.75 12 .75.75 5.787.75 12 5.787 23.25 12 23.25zM12 2a.25.25 0 0 1 .25.25v1a.25.25 0 1 1-.5 0v-1A.25.25 0 0 1 12 2zm0 18.5a.25.25 0 0 1 .25.25v1a.25.25 0 1 1-.5 0v-1a.25.25 0 0 1 .25-.25zm7.071-15.571a.25.25 0 0 1 0 .353l-.707.708a.25.25 0 0 1-.354-.354l.708-.707a.25.25 0 0 1 .353 0zM5.99 18.01a.25.25 0 0 1 0 .354l-.708.707a.25.25 0 1 1-.353-.353l.707-.708a.25.25 0 0 1 .354 0zM4.929 4.93a.25.25 0 0 1 .353 0l.708.707a.25.25 0 0 1-.354.354l-.707-.708a.25.25 0 0 1 0-.353zM18.01 18.01a.25.25 0 0 1 .354 0l.707.708a.25.25 0 1 1-.353.353l-.708-.707a.25.25 0 0 1 0-.354zM2 12a.25.25 0 0 1 .25-.25h1a.25.25 0 1 1 0 .5h-1A.25.25 0 0 1 2 12zm18.5 0a.25.25 0 0 1 .25-.25h1a.25.25 0 1 1 0 .5h-1a.25.25 0 0 1-.25-.25zm-4.593-9.205a.25.25 0 0 1 .133.328l-.391.92a.25.25 0 1 1-.46-.195l.39-.92a.25.25 0 0 1 .328-.133zM8.68 19.825a.25.25 0 0 1 .132.327l-.39.92a.25.25 0 0 1-.46-.195l.39-.92a.25.25 0 0 1 .328-.133zM21.272 8.253a.25.25 0 0 1-.138.325l-.927.375a.25.25 0 1 1-.188-.464l.927-.374a.25.25 0 0 1 .326.138zm-17.153 6.93a.25.25 0 0 1-.138.326l-.927.374a.25.25 0 1 1-.188-.463l.927-.375a.25.25 0 0 1 .326.138zM8.254 2.728a.25.25 0 0 1 .325.138l.375.927a.25.25 0 0 1-.464.188l-.374-.927a.25.25 0 0 1 .138-.326zm6.93 17.153a.25.25 0 0 1 .326.138l.374.927a.25.25 0 1 1-.463.188l-.375-.927a.25.25 0 0 1 .138-.326zM2.795 8.093a.25.25 0 0 1 .328-.133l.92.391a.25.25 0 0 1-.195.46l-.92-.39a.25.25 0 0 1-.133-.328zm17.03 7.228a.25.25 0 0 1 .327-.132l.92.39a.25.25 0 1 1-.195.46l-.92-.39a.25.25 0 0 1-.133-.328zM12.879 12.879L11.12 11.12l-4.141 5.9 5.899-4.142zm6.192-7.95l-5.834 8.308-8.308 5.834 5.834-8.308 8.308-5.834z"/></svg>',opera:'<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Opera</title><path d="M8.051 5.238c-1.328 1.566-2.186 3.883-2.246 6.48v.564c.061 2.598.918 4.912 2.246 6.479 1.721 2.236 4.279 3.654 7.139 3.654 1.756 0 3.4-.537 4.807-1.471C17.879 22.846 15.074 24 12 24c-.192 0-.383-.004-.57-.014C5.064 23.689 0 18.436 0 12 0 5.371 5.373 0 12 0h.045c3.055.012 5.84 1.166 7.953 3.055-1.408-.93-3.051-1.471-4.81-1.471-2.858 0-5.417 1.42-7.14 3.654h.003zM24 12c0 3.556-1.545 6.748-4.002 8.945-3.078 1.5-5.946.451-6.896-.205 3.023-.664 5.307-4.32 5.307-8.74 0-4.422-2.283-8.075-5.307-8.74.949-.654 3.818-1.703 6.896-.205C22.455 5.25 24 8.445 24 12z"/></svg>',ios_saf:'<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>iOS Safari</title><path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701"/></svg>',and_chr:'<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Google Chrome (Android)</title><path d="M12 4.984A9.009 9.009 0 0 0 4.953 8.37l2.973 5.151A4.103 4.103 0 0 1 12 9.907h8.043A9.027 9.027 0 0 0 12 4.984ZM4.425 9.099a8.984 8.984 0 0 0-1.452 4.912 9.029 9.029 0 0 0 7.665 8.925l2.973-5.15a4.1 4.1 0 0 1-5.164-1.724Zm10.037 1.629a4.097 4.097 0 0 1 1.091 5.334h.001-.001l-4.02 6.964a9.028 9.028 0 0 0 8.88-12.298zM12 17.294a3.283 3.283 0 1 1 0-6.566 3.283 3.283 0 0 1 0 6.566z" style="stroke-width:.752276"/><path d="M16.316 8.729a.782.782 0 0 1 0-1.562.782.782 0 0 1 0 1.562m-8.632 0a.782.782 0 0 1 0-1.562.782.782 0 0 1 0 1.562m8.912-4.704 1.56-2.703a.325.325 0 0 0-.118-.444.325.325 0 0 0-.444.119l-1.58 2.737A9.634 9.634 0 0 0 12 2.876a9.634 9.634 0 0 0-4.014.858L6.406.997a.325.325 0 0 0-.444-.119.325.325 0 0 0-.119.444l1.561 2.703c-2.68 1.457-4.513 4.17-4.781 7.376h18.754c-.268-3.205-2.101-5.919-4.781-7.376" style="fill:#00b71b;fill-opacity:1;stroke-width:.781421"/></svg>',and_ff:'<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Mozilla Firefox (Android)</title><path d="M9.536 10.531c.006 0 .003 0 0 0zM7.429 9.478c.005 0 .003 0 0 0zm12.604 1.626c-.38-.915-1.15-1.902-1.755-2.214.492.965.777 1.933.885 2.655l.002.015c-.989-2.466-2.666-3.46-4.037-5.625-.068-.11-.138-.22-.205-.335a2.667 2.667 0 0 1-.098-.18 1.593 1.593 0 0 1-.13-.347.023.023 0 0 0-.02-.022.029.029 0 0 0-.015 0h-.005a.028.028 0 0 0-.007.004l.003-.006c-1.944 1.14-2.75 3.136-2.958 4.406a4.662 4.662 0 0 0-1.734.441.223.223 0 0 0-.11.278.22.22 0 0 0 .298.128 4.23 4.23 0 0 1 1.51-.393l.05-.004a4.399 4.399 0 0 1 1.473.167l.071.023a4.375 4.375 0 0 1 .464.171c.06.027.12.055.179.084l.08.042a4.39 4.39 0 0 1 .277.159 4.478 4.478 0 0 1 1.53 1.582c-.466-.328-1.304-.653-2.108-.512 3.146 1.572 2.302 6.99-2.06 6.786a3.885 3.885 0 0 1-1.138-.22 3.325 3.325 0 0 1-.404-.175c-1.069-.553-1.951-1.595-2.062-2.863 0 0 .404-1.504 2.893-1.504.268 0 1.038-.751 1.052-.968-.004-.072-1.527-.678-2.12-1.262-.317-.313-.467-.463-.601-.577a2.61 2.61 0 0 0-.227-.17 4.053 4.053 0 0 1-.024-2.139c-.899.41-1.598 1.056-2.106 1.627H6.87c-.346-.439-.322-1.888-.302-2.191-.005-.019-.258.132-.293.155a6.341 6.341 0 0 0-.854.733 7.654 7.654 0 0 0-.817.98A7.384 7.384 0 0 0 3.43 12.48a10.406 10.406 0 0 0-.17 1.012 5.868 5.868 0 0 0-.052.502l-.002.025-.017.291-.001.045a8.748 8.748 0 0 0 8.749 8.748c4.327 0 7.92-3.142 8.623-7.268.015-.112.027-.224.04-.337.174-1.5-.02-3.077-.567-4.396z" style="stroke-width:.752277"/><circle style="fill:#000;fill-opacity:1;stroke:none;stroke-width:1.00157;stroke-linecap:round;stroke-linejoin:round;paint-order:stroke markers fill;stop-color:#000" cx="7.738" cy="7.825" r="1.18"/><circle style="fill:#000;fill-opacity:1;stroke:none;stroke-width:1.00157;stroke-linecap:round;stroke-linejoin:round;paint-order:stroke markers fill;stop-color:#000" cx="16.35" cy="7.956" r="1.18"/><path d="M16.316 8.729a.782.782 0 0 1 0-1.562.782.782 0 0 1 0 1.562m-8.632 0a.782.782 0 0 1 0-1.562.782.782 0 0 1 0 1.562m8.912-4.704 1.56-2.703a.325.325 0 0 0-.118-.444.325.325 0 0 0-.444.119l-1.58 2.737A9.634 9.634 0 0 0 12 2.876a9.634 9.634 0 0 0-4.014.858L6.406.997a.325.325 0 0 0-.444-.119.325.325 0 0 0-.119.444l1.561 2.703c-2.68 1.457-4.513 4.17-4.781 7.376h18.754c-.268-3.205-2.101-5.919-4.781-7.376" style="fill:#00b71b;fill-opacity:1;stroke-width:.781421"/></svg>'},i={y:"Soportado",a:"Soporte parcial",n:"No soportado",d:"Soporte retirado",p:"Soporte con prefijo"};class s extends HTMLElement{constructor(){super(),this.attachShadow({mode:"open"})}static get styles(){return'\n      .caniuse {\n        display: inline-grid;\n        border: 3px solid #444;\n        border-radius: 5px;\n        padding: 10px 20px;\n        position: relative;\n      }\n\n      h3 {\n        font-family: Montserrat;\n        font-variation-settings: "wght" 700;\n        letter-spacing: -2px;\n        margin: 0;\n        margin-bottom: 0.5em;\n      }\n\n      .browsers {\n        display: flex;\n        flex-wrap: wrap;\n        gap: 15px;\n      }\n\n      .ua {\n        font-family: "Victor Mono", monospace;\n        font-size: 22px;\n        display: flex;\n        flex-direction: column;\n        align-items: center;\n        border-radius: 5px;\n        padding: 4px 8px;\n        fill: var(--color);\n        color: var(--color);\n        gap: 5px;\n      }\n\n      .ua.y { --color: green; }\n      .ua.n { --color: darkred; }\n      .ua.a { --color: #a0b312; }\n      .ua.d { --color: #4a0303; }\n      .ua.p { --color: #cec21b; }\n\n      .key {\n        font-size: 14px;\n        background: #444;\n        color: #fff;\n        text-decoration: none;\n        position: absolute;\n        top: 0;\n        right: 0;\n        padding: 0 10px;\n      }\n\n      @media screen and (max-width: 900px) {\n        .key { display: none; }\n      }\n\n      svg {\n        width: 42px;\n      }\n    '}connectedCallback(){this.feature=this.getAttribute("feature"),this.id=this.feature.replace(/^mdn-([A-Za-z]+_)+/,""),this.title=this.feature.startsWith("mdn-")?this.id:this.getAttribute("title"),this.agents={edge:this.getAttribute("edge"),firefox:this.getAttribute("firefox"),chrome:this.getAttribute("chrome"),safari:this.getAttribute("safari"),opera:this.getAttribute("opera"),ios_saf:this.getAttribute("ios_saf"),and_chr:this.getAttribute("and_chr"),and_ff:this.getAttribute("and_ff")},this.render()}showBrowsers(){return Object.keys(o).map((t=>{const n=o[t],[e,a]=this.agents[t].split("/");return`<div class="ua ${a}" title="${i[a]}">${n} ${e}</div>`})).join("")}render(){this.shadowRoot.innerHTML=`\n    <style>${s.styles}</style>\n    <div class="caniuse">\n      <h3>${this.title}</h3>\n      <div class="browsers">\n        ${this.showBrowsers()}\n      </div>\n      <a class="key" href="https://caniuse.com/${this.feature}">${this.id}</a>\n    </div>`}}customElements.define("caniuse-support",s);class r extends HTMLElement{constructor(){super(),this.attachShadow({mode:"open"})}static get styles(){return"\n      svg {\n        width: var(--icon-size, 42px);\n        height: var(--icon-size, 42px);\n        fill: #666;\n        margin: 0 var(--icon-side-padding, 0.25em);\n        transition: fill 0.6s;\n      }\n\n      svg:hover {\n        fill: #fff;\n      }\n    "}connectedCallback(){this.type=this.getAttribute("type")||"social",this.icon=this.getAttribute("name"),this.render()}render(){this.shadowRoot.innerHTML=`\n    <style>${r.styles}</style>\n    <svg version="2.0">\n      <use href="/assets/${this.type}.svg#${this.icon}">\n    </svg>`}}customElements.define("svg-icon",r);const l=t=>{(()=>{const t=document.createElement("style");t.textContent='\n    pre[class^="language"] {\n      position: relative;\n    }\n\n    .button-container {\n      position: absolute;\n      top: 15px;\n      right: 10px;\n    }\n\n    .button-container button {\n      --color: #aaa;\n      background: none;\n      border: 0;\n    }\n\n    .button-container button:hover {\n      --color: #fff;\n      cursor: pointer;\n    }\n  ',document.body.appendChild(t)})(),t.forEach((t=>{const n=t.innerText,e=document.createElement("div");e.classList.add("button-container"),t.appendChild(e);const a=document.createElement("button");a.title="Copiar",a.classList.add("copy"),a.innerHTML='<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="32" height="32" viewBox="0 0 24 24"><path fill="var(--color)" d="M7 18V2h13v16Zm2-2h9V4H9Zm-6 6V6h2v14h11v2Zm6-6V4v12Z"></path></svg>',a.addEventListener("click",(()=>{navigator.clipboard.writeText(n).then((t=>{a.disabled=!0}))})),e.appendChild(a)}))};class c extends HTMLElement{constructor(){super(),this.attachShadow({mode:"open"})}static get styles(){return"\n      .twitch-hour {\n        font-family: var(--font-strong);\n        font-size: 1rem;\n        background: #6441a5;\n        color: #fff;\n        display: flex;\n        justify-content: center;\n        padding: 1em 0;\n        position: relative;\n        overflow: hidden;\n      }\n\n      .twitch-hour a {\n        color: #fff;\n        font-size: 1rem;\n        font-weight: 700;\n      }\n\n      .twitch-hour a:hover {\n        color: #3dd8f7;\n      }\n\n      .twitch-hour p {\n        margin: 0;\n        color: #f1e9ff;\n      }\n\n      .twitch-hour .manz-top {\n        position: absolute;\n        height: 48px;\n        animation: movemanz 3s infinite alternate ease-in-out;\n      }\n\n      @keyframes movemanz {\n        0% { transform: translate(16px, 48px); }\n\n        25%,\n        90% { transform: translate(16px, 0); }\n      }\n    "}connectedCallback(){this.render()}static check(){const t=Number((new Date).toISOString().split("T")[1].split(":")[0]);t>16&&t<=23&&c.add()}static add(){const t=document.createElement("twitch-hour");document.body.insertAdjacentElement("afterbegin",t)}render(){this.shadowRoot.innerHTML=`\n    <style>${c.styles}</style>\n    <div class="twitch-hour">\n      <p>\n        ¿Estaré en directo en <strong>Twitch</strong>? → <a href="https://twitch.tv/ManzDev">ManzDev</a>\n        <img class="manz-top" src="/assets/manz.svg" alt="Pixelated Manz">\n      </p>\n    </div>`}}customElements.define("twitch-hour",c);document.querySelectorAll(".content a > img:only-child").forEach((t=>t.parentElement.classList.add("nohover"))),addEventListener("load",(()=>document.body.classList.add("loaded")));const d=[...document.querySelectorAll("pre > code")].map((t=>t.parentElement));d.length>0&&(l(d),(t=>{t.forEach((t=>{const n=t.innerText,e=document.createElement("button");if(e.classList.add("codepen"),e.title="Ver en Codepen",e.innerHTML='<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="var(--color)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m12 2l10 6.5v7L12 22L2 15.5v-7L12 2zm0 20v-6.5"></path><path d="m22 8.5l-10 7l-10-7"></path><path d="m2 15.5l10-7l10 7M12 2v6.5"></path></g></svg>',t.classList.contains("language-html")){const a=t.querySelector(".button-container");e.addEventListener("click",(()=>{const e=document.createElement("form");e.action="https://codepen.io/pen/define",e.method="POST",e.target="_blank";const a=document.createElement("input");a.type="hidden",a.name="data",a.value=JSON.stringify({title:document.title,html:n}),e.insertAdjacentElement("afterbegin",a),t.querySelector("form")?.remove(),t.appendChild(e),e.submit()})),a.appendChild(e)}}))})(d));const h=document.querySelector(".content img");h&&h.removeAttribute("loading"),document.querySelector("form.search").addEventListener("submit",(t=>{t.preventDefault();const n=t.target.querySelector("form.search input[name=q]").value;location.href=`https://www.google.com/search?q=${escape(n)}+`+escape("site:lenguajejs.com OR site:lenguajecss.com OR site:lenguajehtml.com OR site:terminaldelinux.com OR site:manz.dev")})),c.check();if(document.querySelector(".content")){const t=document.createElement("manz-widget");document.body.appendChild(t)}