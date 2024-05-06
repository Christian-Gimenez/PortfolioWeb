export class WindowApp {
  constructor() {
    this._window = this.#createNode("section");
  }

  #createNode(htmlTag, txt = false) {
    const elem = document.createElement(htmlTag);
    if(!txt) {
      const nodeTxt = document.createTextNode(txt);
      elem.appendChild(nodeTxt);
    }
    return elem;
  }
}