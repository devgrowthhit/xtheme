// Looks for Form Id and will get Resource and Form if true

var hasFormId = document.getElementById('eclipse-load');
var id = docInputs.legacyId;
var lang = docInputs.lang;
var docData = null;

function getDocData() {
  return new Promise((resolve, reject) => {
    jQuery.get('https://www.mastercontrol.com/customapi/ResourceWidgetData/GetDocumentData/?legacyIds=' + id + '&lang=' + lang)
    .then(data => {
        resolve(data);
      })
      .fail(() => reject(console.warn('warning message')));
  })
}

if(hasFormId) {
  getDocData().then(data => {
    docData = data;
  });
}