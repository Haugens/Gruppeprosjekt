var events = [];

fetch('testdatabase.php')
  .then(function(response) {
    return response.json()
  }).then(function(json) {
    console.log('parsed json', json);
    for(var i = 0; i<json.length;i++){
        console.log("yes sir");
    }
  }).catch(function(ex) {
    console.log('parsing failed', ex)
  })
