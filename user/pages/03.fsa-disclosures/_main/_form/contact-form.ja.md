---
title: 'Contact Form'
cache_enable: false
form:
    name: contact
    action: fsa-disclosures
    fields:
        -
            name: 'Full Name'
            label: 名前
            autocomplete: 'off'
            type: text
            validate:
                required: true
        -
            name: Furigana
            label: ふりがな
            type: text
            validate:
                required: true
        -
            name: 'Organization Name'
            label: 組織名
            type: text
            validate:
                required: true
        -
            name: 'Division Name'
            label: 部署名
            type: text
            validate:
                required: true
        -
            name: phone
            label: 電話番号
            type: text
            validate:
                required: true
        -
            name: email
            label: メールアドレス
            type: email
            validate:
                required: true
        -
            name: g-recaptcha-response
            type: captcha
            label: ' '
            outerclasses: recaptcha
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: 送信
            classes: btn
            outerclasses: contact-submit
    process:
        -
            captcha: null
        -
            email:
                subject: '[Site Contact Form]'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            message: あなたの連絡先情報が送信されました。
        -
            display: /fsa-disclosures
---

Pursuant to the Financial Instruments and Exchange Law of Japan, effective as of March 1, 2016, a person who has submitted a notification regarding Specially Permitted Businesses for Qualified Institutional Investors, etc. is required to make available to the public certain information. Information on the following entities can be obtained upon request:

If you would like to obtain information, please contact us via the form below.
