const tl = gsap.timeline({ defaults: { ease: "power1.out" } });
tl.to(".logo", { y: "0%", duration: 0.5});
tl.to(".slider", { y: "-100%", duration: 0.75, delay: 0.25 });
tl.to(".intro", { y: "-100%", duration: 0.5 }, "-=0.5");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 0.5 });
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 0.5 }, "-=0.5");
const searchButton = document.querySelector("nav .desktop-nav .link-search");
const closeButton = document.querySelector(".search-container .link-close");
const desktopNav = document.querySelector(".desktop-nav");
const searchContainer = document.querySelector(".search-container");
const overlay = document.querySelector(".overlay");
searchButton.addEventListener("click", () => {
    desktopNav.classList.add("hide");
    searchContainer.classList.remove("hide");
    overlay.classList.add("show");
})
closeButton.addEventListener("click", () => {
    desktopNav.classList.remove("hide");
    searchContainer.classList.add("hide");
    overlay.classList.remove("show");
})
overlay.addEventListener("click", () => {
    desktopNav.classList.remove("hide");
    searchContainer.classList.add("hide");
    overlay.classList.remove("show");
})
// Mobile Version
const menuIconContainer = document.querySelector("nav .menu-icon-container");
const navContainer = document.querySelector(".nav-container");

menuIconContainer.addEventListener("click", () => {
    navContainer.classList.toggle("active");
})
const searchBar = document.querySelector(".mobile-search-container .search-bar");
const nav = document.querySelector(".nav-container nav");
const searchInput = document.querySelector(".mobile-search-container input");
const cancelBtn = document.querySelector(".mobile-search-container .cancel-btn");
searchInput.addEventListener("click", () => {
    searchBar.classList.add("active");
    nav.classList.add("move-up");
    desktopNav.classList.add("move-down");
})
cancelBtn.addEventListener("click", () => {
    searchBar.classList.remove("active");
    nav.classList.remove("move-up");
    desktopNav.classList.remove("move-down");
})


/*
 *   This content is licensed according to the W3C Software License at
 *   https://www.w3.org/Consortium/Legal/2015/copyright-software-and-document
 */

"use strict";

class ComboboxAutocomplete {
  constructor(comboboxNode, buttonNode, listboxNode) {
    this.comboboxNode = comboboxNode;
    this.buttonNode = buttonNode;
    this.listboxNode = listboxNode;

    this.comboboxHasVisualFocus = false;
    this.listboxHasVisualFocus = false;

    this.hasHover = false;

    this.isNone = false;
    this.isList = false;
    this.isBoth = false;

    this.allOptions = [];

    this.option = null;
    this.firstOption = null;
    this.lastOption = null;

    this.filteredOptions = [];
    this.filter = "";

    var autocomplete = this.comboboxNode.getAttribute("aria-autocomplete");

    if (typeof autocomplete === "string") {
      autocomplete = autocomplete.toLowerCase();
      this.isNone = autocomplete === "none";
      this.isList = autocomplete === "list";
      this.isBoth = autocomplete === "both";
    } else {
      // default value of autocomplete
      this.isNone = true;
    }

    this.comboboxNode.addEventListener(
      "keydown",
      this.onComboboxKeyDown.bind(this)
    );
    this.comboboxNode.addEventListener(
      "keyup",
      this.onComboboxKeyUp.bind(this)
    );
    this.comboboxNode.addEventListener(
      "click",
      this.onComboboxClick.bind(this)
    );
    this.comboboxNode.addEventListener(
      "focus",
      this.onComboboxFocus.bind(this)
    );
    this.comboboxNode.addEventListener("blur", this.onComboboxBlur.bind(this));

    document.body.addEventListener(
      "pointerup",
      this.onBackgroundPointerUp.bind(this),
      true
    );

    // initialize pop up menu

    this.listboxNode.addEventListener(
      "pointerover",
      this.onListboxPointerover.bind(this)
    );
    this.listboxNode.addEventListener(
      "pointerout",
      this.onListboxPointerout.bind(this)
    );

    // Traverse the element children of domNode: configure each with
    // option role behavior and store reference in.options array.
    var nodes = this.listboxNode.getElementsByTagName("LI");

    for (var i = 0; i < nodes.length; i++) {
      var node = nodes[i];
      this.allOptions.push(node);

      node.addEventListener("click", this.onOptionClick.bind(this));
      node.addEventListener("pointerover", this.onOptionPointerover.bind(this));
      node.addEventListener("pointerout", this.onOptionPointerout.bind(this));
    }

    this.filterOptions();

    // Open Button

    var button = this.comboboxNode.nextElementSibling;

    if (button && button.tagName === "BUTTON") {
      button.addEventListener("click", this.onButtonClick.bind(this));
    }
  }

  getLowercaseContent(node) {
    return node.textContent.toLowerCase();
  }

  isOptionInView(option) {
    var bounding = option.getBoundingClientRect();
    return (
      bounding.top >= 0 &&
      bounding.left >= 0 &&
      bounding.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      bounding.right <=
        (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  setActiveDescendant(option) {
    if (option && this.listboxHasVisualFocus) {
      this.comboboxNode.setAttribute("aria-activedescendant", option.id);
      if (!this.isOptionInView(option)) {
        option.scrollIntoView({ behavior: "smooth", block: "nearest" });
      }
    } else {
      this.comboboxNode.setAttribute("aria-activedescendant", "");
    }
  }

  setValue(value) {
    this.filter = value;
    this.comboboxNode.value = this.filter;
    this.comboboxNode.setSelectionRange(this.filter.length, this.filter.length);
    this.filterOptions();
  }

  setOption(option, flag) {
    if (typeof flag !== "boolean") {
      flag = false;
    }

    if (option) {
      this.option = option;
      this.setCurrentOptionStyle(this.option);
      this.setActiveDescendant(this.option);

      if (this.isBoth) {
        this.comboboxNode.value = this.option.textContent;
        if (flag) {
          this.comboboxNode.setSelectionRange(
            this.option.textContent.length,
            this.option.textContent.length
          );
        } else {
          this.comboboxNode.setSelectionRange(
            this.filter.length,
            this.option.textContent.length
          );
        }
      }
    }
  }

  setVisualFocusCombobox() {
    this.listboxNode.classList.remove("focus");
    this.comboboxNode.parentNode.classList.add("focus"); // set the focus class to the parent for easier styling
    this.comboboxHasVisualFocus = true;
    this.listboxHasVisualFocus = false;
    this.setActiveDescendant(false);
  }

  setVisualFocusListbox() {
    this.comboboxNode.parentNode.classList.remove("focus");
    this.comboboxHasVisualFocus = false;
    this.listboxHasVisualFocus = true;
    this.listboxNode.classList.add("focus");
    this.setActiveDescendant(this.option);
  }

  removeVisualFocusAll() {
    this.comboboxNode.parentNode.classList.remove("focus");
    this.comboboxHasVisualFocus = false;
    this.listboxHasVisualFocus = false;
    this.listboxNode.classList.remove("focus");
    this.option = null;
    this.setActiveDescendant(false);
  }

  // ComboboxAutocomplete Events

  filterOptions() {
    // do not filter any options if autocomplete is none
    if (this.isNone) {
      this.filter = "";
    }

    var option = null;
    var currentOption = this.option;
    var filter = this.filter.toLowerCase();

    this.filteredOptions = [];
    this.listboxNode.innerHTML = "";

    for (var i = 0; i < this.allOptions.length; i++) {
      option = this.allOptions[i];
      if (
        filter.length === 0 ||
        this.getLowercaseContent(option).indexOf(filter) === 0
      ) {
        this.filteredOptions.push(option);
        this.listboxNode.appendChild(option);
      }
    }

    // Use populated options array to initialize firstOption and lastOption.
    var numItems = this.filteredOptions.length;
    if (numItems > 0) {
      this.firstOption = this.filteredOptions[0];
      this.lastOption = this.filteredOptions[numItems - 1];

      if (currentOption && this.filteredOptions.indexOf(currentOption) >= 0) {
        option = currentOption;
      } else {
        option = this.firstOption;
      }
    } else {
      this.firstOption = null;
      option = null;
      this.lastOption = null;
    }

    return option;
  }

  setCurrentOptionStyle(option) {
    for (var i = 0; i < this.filteredOptions.length; i++) {
      var opt = this.filteredOptions[i];
      if (opt === option) {
        opt.setAttribute("aria-selected", "true");
        if (
          this.listboxNode.scrollTop + this.listboxNode.offsetHeight <
          opt.offsetTop + opt.offsetHeight
        ) {
          this.listboxNode.scrollTop =
            opt.offsetTop + opt.offsetHeight - this.listboxNode.offsetHeight;
        } else if (this.listboxNode.scrollTop > opt.offsetTop + 2) {
          this.listboxNode.scrollTop = opt.offsetTop;
        }
      } else {
        opt.removeAttribute("aria-selected");
      }
    }
  }

  getPreviousOption(currentOption) {
    if (currentOption !== this.firstOption) {
      var index = this.filteredOptions.indexOf(currentOption);
      return this.filteredOptions[index - 1];
    }
    return this.lastOption;
  }

  getNextOption(currentOption) {
    if (currentOption !== this.lastOption) {
      var index = this.filteredOptions.indexOf(currentOption);
      return this.filteredOptions[index + 1];
    }
    return this.firstOption;
  }

  /* MENU DISPLAY METHODS */

  doesOptionHaveFocus() {
    return this.comboboxNode.getAttribute("aria-activedescendant") !== "";
  }

  isOpen() {
    return this.listboxNode.style.display === "block";
  }

  isClosed() {
    return this.listboxNode.style.display !== "block";
  }

  hasOptions() {
    return this.filteredOptions.length;
  }

  open() {
    this.listboxNode.style.display = "block";
    this.comboboxNode.setAttribute("aria-expanded", "true");
    this.buttonNode.setAttribute("aria-expanded", "true");
  }

  close(force) {
    if (typeof force !== "boolean") {
      force = false;
    }

    if (
      force ||
      (!this.comboboxHasVisualFocus &&
        !this.listboxHasVisualFocus &&
        !this.hasHover)
    ) {
      this.setCurrentOptionStyle(false);
      this.listboxNode.style.display = "none";
      this.comboboxNode.setAttribute("aria-expanded", "false");
      this.buttonNode.setAttribute("aria-expanded", "false");
      this.setActiveDescendant(false);
      this.comboboxNode.parentNode.classList.add("focus");
    }
  }

  /* combobox Events */

  onComboboxKeyDown(event) {
    var flag = false,
      altKey = event.altKey;

    if (event.ctrlKey || event.shiftKey) {
      return;
    }

    switch (event.key) {
      case "Enter":
        if (this.listboxHasVisualFocus) {
          this.setValue(this.option.textContent);
        }
        this.close(true);
        this.setVisualFocusCombobox();
        flag = true;
        break;

      case "Down":
      case "ArrowDown":
        if (this.filteredOptions.length > 0) {
          if (altKey) {
            this.open();
          } else {
            this.open();
            if (
              this.listboxHasVisualFocus ||
              (this.isBoth && this.filteredOptions.length > 1)
            ) {
              this.setOption(this.getNextOption(this.option), true);
              this.setVisualFocusListbox();
            } else {
              this.setOption(this.firstOption, true);
              this.setVisualFocusListbox();
            }
          }
        }
        flag = true;
        break;

      case "Up":
      case "ArrowUp":
        if (this.hasOptions()) {
          if (this.listboxHasVisualFocus) {
            this.setOption(this.getPreviousOption(this.option), true);
          } else {
            this.open();
            if (!altKey) {
              this.setOption(this.lastOption, true);
              this.setVisualFocusListbox();
            }
          }
        }
        flag = true;
        break;

      case "Esc":
      case "Escape":
        if (this.isOpen()) {
          this.close(true);
          this.filter = this.comboboxNode.value;
          this.filterOptions();
          this.setVisualFocusCombobox();
        } else {
          this.setValue("");
          this.comboboxNode.value = "";
        }
        this.option = null;
        flag = true;
        break;

      case "Tab":
        this.close(true);
        if (this.listboxHasVisualFocus) {
          if (this.option) {
            this.setValue(this.option.textContent);
          }
        }
        break;

      case "Home":
        this.comboboxNode.setSelectionRange(0, 0);
        flag = true;
        break;

      case "End":
        var length = this.comboboxNode.value.length;
        this.comboboxNode.setSelectionRange(length, length);
        flag = true;
        break;

      default:
        break;
    }

    if (flag) {
      event.stopPropagation();
      event.preventDefault();
    }
  }

  isPrintableCharacter(str) {
    return str.length === 1 && str.match(/\S| /);
  }

  onComboboxKeyUp(event) {
    var flag = false,
      option = null,
      char = event.key;

    if (this.isPrintableCharacter(char)) {
      this.filter += char;
    }

    // this is for the case when a selection in the textbox has been deleted
    if (this.comboboxNode.value.length < this.filter.length) {
      this.filter = this.comboboxNode.value;
      this.option = null;
      this.filterOptions();
    }

    if (event.key === "Escape" || event.key === "Esc") {
      return;
    }

    switch (event.key) {
      case "Backspace":
        this.setVisualFocusCombobox();
        this.setCurrentOptionStyle(false);
        this.filter = this.comboboxNode.value;
        this.option = null;
        this.filterOptions();
        flag = true;
        break;

      case "Left":
      case "ArrowLeft":
      case "Right":
      case "ArrowRight":
      case "Home":
      case "End":
        if (this.isBoth) {
          this.filter = this.comboboxNode.value;
        } else {
          this.option = null;
          this.setCurrentOptionStyle(false);
        }
        this.setVisualFocusCombobox();
        flag = true;
        break;

      default:
        if (this.isPrintableCharacter(char)) {
          this.setVisualFocusCombobox();
          this.setCurrentOptionStyle(false);
          flag = true;

          if (this.isList || this.isBoth) {
            option = this.filterOptions();
            if (option) {
              if (this.isClosed() && this.comboboxNode.value.length) {
                this.open();
              }

              if (
                this.getLowercaseContent(option).indexOf(
                  this.comboboxNode.value.toLowerCase()
                ) === 0
              ) {
                this.option = option;
                if (this.isBoth || this.listboxHasVisualFocus) {
                  this.setCurrentOptionStyle(option);
                  if (this.isBoth) {
                    this.setOption(option);
                  }
                }
              } else {
                this.option = null;
                this.setCurrentOptionStyle(false);
              }
            } else {
              this.close();
              this.option = null;
              this.setActiveDescendant(false);
            }
          } else if (this.comboboxNode.value.length) {
            this.open();
          }
        }

        break;
    }

    if (flag) {
      event.stopPropagation();
      event.preventDefault();
    }
  }

  onComboboxClick() {
    if (this.isOpen()) {
      this.close(true);
    } else {
      this.open();
    }
  }

  onComboboxFocus() {
    this.filter = this.comboboxNode.value;
    this.filterOptions();
    this.setVisualFocusCombobox();
    this.option = null;
    this.setCurrentOptionStyle(null);
  }

  onComboboxBlur() {
    this.removeVisualFocusAll();
  }

  onBackgroundPointerUp(event) {
    if (
      !this.comboboxNode.contains(event.target) &&
      !this.listboxNode.contains(event.target) &&
      !this.buttonNode.contains(event.target)
    ) {
      this.comboboxHasVisualFocus = false;
      this.setCurrentOptionStyle(null);
      this.removeVisualFocusAll();
      setTimeout(this.close.bind(this, true), 300);
    }
  }

  onButtonClick() {
    if (this.isOpen()) {
      this.close(true);
    } else {
      this.open();
    }
    this.comboboxNode.focus();
    this.setVisualFocusCombobox();
  }

  /* Listbox Events */

  onListboxPointerover() {
    this.hasHover = true;
  }

  onListboxPointerout() {
    this.hasHover = false;
    setTimeout(this.close.bind(this, false), 300);
  }

  // Listbox Option Events

  onOptionClick(event) {
    this.comboboxNode.value = event.target.textContent;
    this.close(true);
  }

  onOptionPointerover() {
    this.hasHover = true;
    this.open();
  }

  onOptionPointerout() {
    this.hasHover = false;
    setTimeout(this.close.bind(this, false), 300);
  }
}

// Initialize comboboxes

window.addEventListener("load", function () {
  var comboboxes = document.querySelectorAll(".combobox-list");

  for (var i = 0; i < comboboxes.length; i++) {
    var combobox = comboboxes[i];
    var comboboxNode = combobox.querySelector("input");
    var buttonNode = combobox.querySelector("button");
    var listboxNode = combobox.querySelector('[role="listbox"]');
    new ComboboxAutocomplete(comboboxNode, buttonNode, listboxNode);
  }
});

function getInputFromTextBox() {
    var input = document.getElementById("myInput").value+document.getElementById("myOtherInput").value;
    switch(input){
        case "ArteAlba Iulia": window.location.href = 'ArteAlbaIulia.php';
        break;
        case "ArteArad": window.location.href = 'login.php';
        break;
        case "ArteBacau": window.location.href = 'login.php';
        break;
        case "ArteBrasov": window.location.href = 'login.php';
        break;
        case "ArteBucuresti": window.location.href = 'login.php';
        break;
        case "ArteCluj Napoca": window.location.href = 'login.php';
        break;
        case "ArteConstanta": window.location.href = 'login.php';
        break;
        case "ArteCraiova": window.location.href = 'login.php';
        break;
        case "ArteGalati": window.location.href = 'login.php';
        break;
        case "ArteIasi": window.location.href = 'login.php';
        break;
        case "ArteLugoj": window.location.href = 'login.php';
        break;
        case "ArteOradea": window.location.href = 'login.php';
        break;
        case "ArtePetrosani": window.location.href = 'login.php';
        break;
        case "ArtePitesti": window.location.href = 'login.php';
        break;
        case "ArtePloiesti": window.location.href = 'login.php';
        break;
        case "ArteResita": window.location.href = 'login.php';
        break;
        case "ArteSibiu": window.location.href = 'login.php';
        break;
        case "ArteSuceava": window.location.href = 'login.php';
        break;
        case "ArteTragoviste": window.location.href = 'login.php';
        break;
        case "ArteTargu Jiu": window.location.href = 'login.php';
        break;
        case "ArteTargu Mures": window.location.href = 'login.php';
        break;
        case "ArteTimisoara": window.location.href = 'login.php';
        break;
        
        case "ArhitecturaAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "ArhitecturaArad": window.location.href = 'login.php';
        break;
        case "ArhitecturaBacau": window.location.href = 'login.php';
        break;
        case "ArhitecturaBrasov": window.location.href = 'login.php';
        break;
        case "ArhitecturaBucuresti": window.location.href = 'login.php';
        break;
        case "ArhitecturaCluj Napoca": window.location.href = 'login.php';
        break;
        case "ArhitecturaConstanta": window.location.href = 'login.php';
        break;
        case "ArhitecturaCraiova": window.location.href = 'login.php';
        break;
        case "ArhitecturaGalati": window.location.href = 'login.php';
        break;
        case "ArhitecturaIasi": window.location.href = 'login.php';
        break;
        case "ArhitecturaLugoj": window.location.href = 'login.php';
        break;
        case "ArhitecturaOradea": window.location.href = 'login.php';
        break;
        case "ArhitecturaPetrosani": window.location.href = 'login.php';
        break;
        case "ArhitecturaPitesti": window.location.href = 'login.php';
        break;
        case "ArhitecturaPloiesti": window.location.href = 'login.php';
        break;
        case "ArhitecturaResita": window.location.href = 'login.php';
        break;
        case "ArhitecturaSibiu": window.location.href = 'login.php';
        break;
        case "ArhitecturaSuceava": window.location.href = 'login.php';
        break;
        case "ArhitecturaTragoviste": window.location.href = 'login.php';
        break;
        case "ArhitecturaTargu Jiu": window.location.href = 'login.php';
        break;
        case "ArhitecturaTargu Mures": window.location.href = 'login.php';
        break;
        case "ArhitecturaTimisoara": window.location.href = 'login.php';
        break;

        case "BusinessAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "BusinessArad": window.location.href = 'login.php';
        break;
        case "BusinessBacau": window.location.href = 'login.php';
        break;
        case "BusinessBrasov": window.location.href = 'login.php';
        break;
        case "BusinessBucuresti": window.location.href = 'login.php';
        break;
        case "BusinessCluj Napoca": window.location.href = 'login.php';
        break;
        case "BusinessConstanta": window.location.href = 'login.php';
        break;
        case "BusinessCraiova": window.location.href = 'login.php';
        break;
        case "BusinessGalati": window.location.href = 'login.php';
        break;
        case "BusinessIasi": window.location.href = 'login.php';
        break;
        case "BusinessLugoj": window.location.href = 'login.php';
        break;
        case "BusinessOradea": window.location.href = 'login.php';
        break;
        case "BusinessPetrosani": window.location.href = 'login.php';
        break;
        case "BusinessPitesti": window.location.href = 'login.php';
        break;
        case "BusinessPloiesti": window.location.href = 'login.php';
        break;
        case "BusinessResita": window.location.href = 'login.php';
        break;
        case "BusinessSibiu": window.location.href = 'login.php';
        break;
        case "BusinessSuceava": window.location.href = 'login.php';
        break;
        case "BusinessTragoviste": window.location.href = 'login.php';
        break;
        case "BusinessTargu Jiu": window.location.href = 'login.php';
        break;
        case "BusinessTargu Mures": window.location.href = 'login.php';
        break;
        case "BusinessTimisoara": window.location.href = 'login.php';
        break;

        case "ITAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "ITArad": window.location.href = 'login.php';
        break;
        case "ITBacau": window.location.href = 'login.php';
        break;
        case "ITBrasov": window.location.href = 'login.php';
        break;
        case "ITBucuresti": window.location.href = 'login.php';
        break;
        case "ITCluj Napoca": window.location.href = 'login.php';
        break;
        case "ITConstanta": window.location.href = 'login.php';
        break;
        case "ITCraiova": window.location.href = 'login.php';
        break;
        case "ITGalati": window.location.href = 'login.php';
        break;
        case "ITIasi": window.location.href = 'login.php';
        break;
        case "ITLugoj": window.location.href = 'login.php';
        break;
        case "ITOradea": window.location.href = 'login.php';
        break;
        case "ITPetrosani": window.location.href = 'login.php';
        break;
        case "ITPitesti": window.location.href = 'login.php';
        break;
        case "ITPloiesti": window.location.href = 'login.php';
        break;
        case "ITeResita": window.location.href = 'login.php';
        break;
        case "ITSibiu": window.location.href = 'login.php';
        break;
        case "ITSuceava": window.location.href = 'login.php';
        break;
        case "ITTragoviste": window.location.href = 'login.php';
        break;
        case "ITTargu Jiu": window.location.href = 'login.php';
        break;
        case "ITTargu Mures": window.location.href = 'login.php';
        break;
        case "ITTimisoara": window.location.href = 'login.php';
        break;

        case "InginerieAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "InginerieArad": window.location.href = 'login.php';
        break;
        case "InginerieBacau": window.location.href = 'login.php';
        break;
        case "InginerieBrasov": window.location.href = 'login.php';
        break;
        case "InginerieBucuresti": window.location.href = 'login.php';
        break;
        case "InginerieCluj Napoca": window.location.href = 'login.php';
        break;
        case "InginerieConstanta": window.location.href = 'login.php';
        break;
        case "InginerieCraiova": window.location.href = 'login.php';
        break;
        case "InginerieGalati": window.location.href = 'login.php';
        break;
        case "InginerieIasi": window.location.href = 'login.php';
        break;
        case "InginerieLugoj": window.location.href = 'login.php';
        break;
        case "InginerieOradea": window.location.href = 'login.php';
        break;
        case "IngineriePetrosani": window.location.href = 'login.php';
        break;
        case "IngineriePitesti": window.location.href = 'login.php';
        break;
        case "IngineriePloiesti": window.location.href = 'login.php';
        break;
        case "InginerieResita": window.location.href = 'login.php';
        break;
        case "InginerieSibiu": window.location.href = 'login.php';
        break;
        case "InginerieSuceava": window.location.href = 'login.php';
        break;
        case "InginerieTragoviste": window.location.href = 'login.php';
        break;
        case "InginerieTargu Jiu": window.location.href = 'login.php';
        break;
        case "InginerieTargu Mures": window.location.href = 'login.php';
        break;
        case "InginerieTimisoara": window.location.href = 'login.php';
        break;

        case "MedicinaAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "MedicinaArad": window.location.href = 'login.php';
        break;
        case "MedicinaBacau": window.location.href = 'login.php';
        break;
        case "MedicinaBrasov": window.location.href = 'login.php';
        break;
        case "MedicinaBucuresti": window.location.href = 'login.php';
        break;
        case "MedicinaCluj Napoca": window.location.href = 'login.php';
        break;
        case "MedicinaConstanta": window.location.href = 'login.php';
        break;
        case "MedicinaCraiova": window.location.href = 'login.php';
        break;
        case "MedicinaGalati": window.location.href = 'login.php';
        break;
        case "MedicinaIasi": window.location.href = 'login.php';
        break;
        case "MedicinaLugoj": window.location.href = 'login.php';
        break;
        case "MedicinaOradea": window.location.href = 'login.php';
        break;
        case "MedicinaPetrosani": window.location.href = 'login.php';
        break;
        case "MedicinaPitesti": window.location.href = 'login.php';
        break;
        case "MedicinaPloiesti": window.location.href = 'login.php';
        break;
        case "MedicinaResita": window.location.href = 'login.php';
        break;
        case "MedicinaSibiu": window.location.href = 'login.php';
        break;
        case "MedicinaSuceava": window.location.href = 'login.php';
        break;
        case "MedicinaTragoviste": window.location.href = 'login.php';
        break;
        case "MedicinaTargu Jiu": window.location.href = 'login.php';
        break;
        case "MedicinaTargu Mures": window.location.href = 'login.php';
        break;
        case "MedicinaTimisoara": window.location.href = 'login.php';
        break;

        case "Stiinte UmanisteAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "Stiinte UmanisteArad": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteBacau": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteBrasov": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteBucuresti": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteCluj Napoca": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteConstanta": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteCraiova": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteGalati": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteIasi": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteLugoj": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteOradea": window.location.href = 'login.php';
        break;
        case "Stiinte UmanistePetrosani": window.location.href = 'login.php';
        break;
        case "Stiinte UmanistePitesti": window.location.href = 'login.php';
        break;
        case "Stiinte UmanistePloiesti": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteResita": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteSibiu": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteSuceava": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteTragoviste": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteTargu Jiu": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteTargu Mures": window.location.href = 'login.php';
        break;
        case "Stiinte UmanisteTimisoara": window.location.href = 'login.php';
        break;

        case "Stiinte JuridiceAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "Stiinte JuridiceArad": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceBacau": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceBrasov": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceBucuresti": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceCluj Napoca": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceConstanta": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceCraiova": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceGalati": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceIasi": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceLugoj": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceOradea": window.location.href = 'login.php';
        break;
        case "Stiinte JuridicePetrosani": window.location.href = 'login.php';
        break;
        case "Stiinte JuridicePitesti": window.location.href = 'login.php';
        break;
        case "Stiinte JuridicePloiesti": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceResita": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceSibiu": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceSuceava": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceTragoviste": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceTargu Jiu": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceTargu Mures": window.location.href = 'login.php';
        break;
        case "Stiinte JuridiceTimisoara": window.location.href = 'login.php';
        break;

        case "Stiinte ale NaturiiAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "Stiinte ale NaturiiArad": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiBacau": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiBrasov": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiBucuresti": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiCluj Napoca": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiConstanta": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiCraiova": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiGalati": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiIasi": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiLugoj": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiOradea": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiPetrosani": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiPitesti": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiPloiesti": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiResita": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiSibiu": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiSuceava": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiTragoviste": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiTargu Jiu": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiTargu Mures": window.location.href = 'login.php';
        break;
        case "Stiinte ale NaturiiTimisoara": window.location.href = 'login.php';
        break;

        case "Stiinte EconomiceAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "Stiinte EconomiceArad": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceBacau": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceBrasov": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceBucuresti": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceCluj Napoca": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceConstanta": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceCraiova": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceGalati": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceIasi": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceLugoj": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceOradea": window.location.href = 'login.php';
        break;
        case "Stiinte EconomicePetrosani": window.location.href = 'login.php';
        break;
        case "Stiinte EconomicePitesti": window.location.href = 'login.php';
        break;
        case "Stiinte EconomicePloiesti": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceResita": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceSibiu": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceSuceava": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceTragoviste": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceTargu Jiu": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceTargu Mures": window.location.href = 'login.php';
        break;
        case "Stiinte EconomiceTimisoara": window.location.href = 'login.php';
        break;

        case "TeologieAlba Iulia": window.location.href = 'Arte.php';
        break;
        case "TeologieArad": window.location.href = 'login.php';
        break;
        case "TeologieBacau": window.location.href = 'login.php';
        break;
        case "TeologieBrasov": window.location.href = 'login.php';
        break;
        case "TeologieBucuresti": window.location.href = 'login.php';
        break;
        case "TeologieCluj Napoca": window.location.href = 'login.php';
        break;
        case "TeologieConstanta": window.location.href = 'login.php';
        break;
        case "TeologieCraiova": window.location.href = 'login.php';
        break;
        case "TeologieGalati": window.location.href = 'login.php';
        break;
        case "TeologieIasi": window.location.href = 'login.php';
        break;
        case "TeologieLugoj": window.location.href = 'login.php';
        break;
        case "TeologieOradea": window.location.href = 'login.php';
        break;
        case "TeologiePetrosani": window.location.href = 'login.php';
        break;
        case "TeologiePitesti": window.location.href = 'login.php';
        break;
        case "TeologiePloiesti": window.location.href = 'login.php';
        break;
        case "TeologieResita": window.location.href = 'login.php';
        break;
        case "TeologieSibiu": window.location.href = 'login.php';
        break;
        case "TeologieSuceava": window.location.href = 'login.php';
        break;
        case "TeologieTragoviste": window.location.href = 'login.php';
        break;
        case "TeologieTargu Jiu": window.location.href = 'login.php';
        break;
        case "TeologieTargu Mures": window.location.href = 'login.php';
        break;
        case "TeologieTimisoara": window.location.href = 'login.php';
        break;
        
        case "Alba Iulia": window.location.href = 'Alba Iulia.php';
        break;
        case "Arad": window.location.href = 'login.php';
        break;
        case "Bacau": window.location.href = 'login.php';
        break;
        case "Brasov": window.location.href = 'login.php';
        break;
        case "Bucuresti": window.location.href = 'login.php';
        break;
        case "Cluj Napoca": window.location.href = 'login.php';
        break;
        case "Constanta": window.location.href = 'login.php';
        break;
        case "Craiova": window.location.href = 'login.php';
        break;
        case "Galati": window.location.href = 'Galati.php';
        break;
        case "Iasi": window.location.href = 'login.php';
        break;
        case "Lugoj": window.location.href = 'login.php';
        break;
        case "Oradea": window.location.href = 'login.php';
        break;
        case "Petrosani": window.location.href = 'login.php';
        break;
        case "Pitesti": window.location.href = 'login.php';
        break;
        case "Ploiesti": window.location.href = 'login.php';
        break;
        case "Resita": window.location.href = 'login.php';
        break;
        case "Sibiu": window.location.href = 'login.php';
        break;
        case "Suceava": window.location.href = 'login.php';
        break;
        case "Tragoviste": window.location.href = 'login.php';
        break;
        case "Targu Jiu": window.location.href = 'login.php';
        break;
        case "Targu Mures": window.location.href = 'login.php';
        break;
        case "Timisoara": window.location.href = 'login.php';
        break;

        case "Arte": window.location.href = 'Arte.php';
        break;
        case "Arhitectura": window.location.href = 'login.php';
        break;
        case "Business": window.location.href = 'login.php';
        break;
        case "Brasov": window.location.href = 'login.php';
        break;
        case "IT": window.location.href = 'login.php';
        break;
        case "Inginerie": window.location.href = 'login.php';
        break;
        case "Medicina": window.location.href = 'login.php';
        break;
        case "Stiinte Umaniste": window.location.href = 'login.php';
        break;
        case "Stiinte Juridice": window.location.href = 'login.php';
        break;
        case "Stiinte ale Naturii": window.location.href = 'login.php';
        break;
        case "Stiinte Economice": window.location.href = 'login.php';
        break;
        case "Teologie": window.location.href = 'login.php';
        break;
        
    }
}

