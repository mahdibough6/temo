const bold = document.getElementsByClassName("bold");
const italic = document.getElementsByClassName("italic");
const strike = document.getElementsByClassName("strike");
const regular = document.getElementsByClassName("regular");
const header = document.getElementsByClassName("header");
const size = document.getElementsByClassName("size");
const right = document.getElementsByClassName("right");
const left = document.getElementsByClassName("left");
const justify = document.getElementsByClassName("justify");
const center = document.getElementsByClassName("center");

function changeText(opt) {
  let span;
  let sel = window.getSelection && window.getSelection();
  if (sel && sel.rangeCount > 0) {
    let range = sel.getRangeAt(0);

    switch (opt) {
      case "bold":
        span = document.createElement("b");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        console.log("bold");
        break;
      case "italic":
        span = document.createElement("i");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      case "regular":
        span = document.createElement("span");
        let parent = range.extractContents();
        console.log(parent.textContent);

        span.innerHTML = parent.textContent.replace(
          /((<|<\\){1}(\w{1,5})>)/gi,
          " "
        );
        span.style = "background-color : none;";
        range.insertNode(span);
        break;
      case "strike":
        span = document.createElement("del");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      case "header":
        span = document.createElement("h1");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      case "size":
        span = document.createElement("h3");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      case "underline":
        span = document.createElement("u");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      case "center":
        span = document.createElement("center");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      case "justify":
        span = document.createElement("p");
        span.setAttribute("align", "justify");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      case "left":
        span = document.createElement("p");
        span.setAttribute("align", "left");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      case "right":
        span = document.createElement("p");
        span.setAttribute("align", "right");
        span.appendChild(range.extractContents());
        range.insertNode(span);
        break;
      default:
        break;
    }
  }
}
