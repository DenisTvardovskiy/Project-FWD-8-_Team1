// Test to see if the browser supports the HTML template element
if ('content' in document.createElement('template')) {

  // Generate link to HTML import file
  var link = document.querySelector('link[rel="import"]');
  
  // Selecting HTML to be imported from file
  var template = link.import.querySelector('template');
  
  // Creating a new copy of selected node
  var clone = document.importNode(template.content, true);
  
  // Appending selected node next to element id="import-header"
  document.querySelector('#import-header').appendChild(clone);

}