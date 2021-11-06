import { createApp } from 'vue';
import CustomerLogoSlider from "./components/CustomerLogoSlider";
import FixedNavbar from "./components/FixedNavbar";
import MenuComponent from "./components/MenuComponent";
import NavbarContent from "./components/NavbarContent";
import ContactForm from "./components/ContactForm";
import Typewriter from "./components/Typewriter";
import FabButton from "./components/FabButton";
import Dropdown from "./components/Dropdown";
import DropdownLink from "./components/DropdownLink";
import MobileMenu from "./components/MobileMenu";
import Contact from "./components/Contact";
// import FloatingContactForm from "./components/FloatingContactForm";

const app = createApp({})
    // .component('',)#
    .component('fixednavbar',FixedNavbar)
    .component('menucomponent',MenuComponent)
    .component('navbarcontent',NavbarContent)
    .component('customerlogoslider',CustomerLogoSlider)
    .component('contactform',ContactForm)
    .component('typewriter',Typewriter)
    .component('fabbutton',FabButton)
    .component('dropdown',Dropdown)
    .component('dropdownlink',DropdownLink)
    .component('mobilemenu',MobileMenu)
    .component('contact',Contact)
    // .component('floatingcontactform',FloatingContactForm)
    .mount('#app');
