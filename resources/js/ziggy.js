const Ziggy = {"url":"http:\/\/localhost:8000","port":8000,"defaults":{},"routes":{"home":{"uri":"\/","methods":["GET","HEAD"]},"impressum":{"uri":"impressum","methods":["GET","HEAD"]},"datenschutzerkl\u00e4rung":{"uri":"datenschutzerkl\u00e4rung","methods":["GET","HEAD"]},"kundencenter":{"uri":"kundencenter","methods":["GET","HEAD"]},"email":{"uri":"email","methods":["POST"]},"services.softwareentwicklung":{"uri":"services\/softwareentwicklung\/{ort?}","methods":["GET","HEAD"]},"services.it-beratung":{"uri":"services\/it-beratung\/{ort?}","methods":["GET","HEAD"]},"services.itk-services":{"uri":"services\/informations-und-telekommunikationstechnik\/{ort?}","methods":["GET","HEAD"]},"services.genericService":{"uri":"services\/{service}\/{ort?}","methods":["GET","HEAD"]},"team.martin":{"uri":"team\/martinm\u00fcller","methods":["GET","HEAD"]},"team.tim":{"uri":"team\/timtomczak","methods":["GET","HEAD"]},"team.sven":{"uri":"team\/svenwalbr\u00f6l","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
