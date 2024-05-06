export class StartBar {
  constructor(startBtnSelector, startMenuSelector, itemMenuSelector) {
    this._startBtn = document.querySelector(startBtnSelector);
    this._startMenu = new StartMenu (startMenuSelector, itemMenuSelector);
  }

  get startBtn() {
    return this._startBtn;
  }

  get startMenu() {
    return this._startMenu;
  } 
}

export class StartMenu {
  constructor(startMenuSelector, itemMenuSelector) {
    this._startMenu = document.querySelector(startMenuSelector);
    this._menuItems = document.querySelectorAll(itemMenuSelector);
  }

  get startMenu() {
    return this._startMenu;
  }

  get menuItems() {
    return this._menuItems;
  }
}