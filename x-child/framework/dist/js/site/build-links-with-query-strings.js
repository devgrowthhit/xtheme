// Build the Links with query strings that are enqueued in

let fileInfo = [
  {
    queueName: "megamenu-js",
    filename: "mcui-megamenu-scripts-v2.js",
    staticFilePath: "/wp/assets/js/",
    wpFilePath: "/framework/dist/js/site/",
  },{
    queueName: "above-fold-js",
    filename: "wp-abovefold-us.min.js",
    staticFilePath: "/wp/assets/js/above-fold/",
    wpFilePath: "/framework/dist/js/site/",  
  },{
    queueName: "getresourceandform",
    filename: "getresourceandform.js",
    staticFilePath: "/wp/assets/js/",
    wpFilePath: "/framework/dist/js/site/",
  }
]

// Import data from JSON file
fetch('https://static.mastercontrol.com/wp/assets/file-hashes.json')
.then((response) => response.json())
.then((json) => buildQueryStringFiles(json));


function buildQueryStringFiles(fileHashes) {
  fileInfo.forEach(element => {
    let queryString = fileHashes[element.staticFilePath + element.filename];
    let wpFilePath = 'https://www.mastercontrol.com/lp/wp-content/themes/x-child'+ element.wpFilePath + element.filename;
    if(queryString) {
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.src = wpFilePath + '?v=' + queryString;
      document.head.appendChild(s);
      // console.log({s});
    } else {
      queryString = 'noQuery';
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.src = wpFilePath + '?v=' + queryString;
      document.head.appendChild(s);
      // console.log({s});
    }
  });
}