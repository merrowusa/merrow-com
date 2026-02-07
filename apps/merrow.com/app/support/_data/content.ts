import { SUPPORT_CONTACT } from "./links";

export interface SupportContentBlock {
  title: string;
  html: string;
}

export const SUPPORT_KEY_CONTENT: Record<string, SupportContentBlock> = {
  howto: {
    title: "How to use this menu",
    html:
      "The menu on the left is divided into general classes of Merrow machines.<br/><br/>" +
      "MG Class - all green sergers<br/>" +
      "70 Class - used for textile finishing<br/>" +
      "Crochet Machines - high-arm sewing machines using straight needles and latch hooks<br/><br/>" +
      "For video support please go <a href=\"https://www.merrow.com/video.html\">here</a>.<br/><br/>" +
      "We're here to help; <a href=\"/contact_general.html\">let us know</a> if there is anything else we can do.",
  },
  thankyou: {
    title: "Thanks for your input",
    html:
      "We will do the best we can to make changes based on your suggestions and questions.<br/><br/>" +
      "To offer a more detailed suggestion please go <a href=\"/contact_general.html\">here</a>.",
  },
  error: {
    title: "Please add your email address",
    html:
      "Without your email address we cannot read and process your comment.<br/><br/>" +
      "To offer a more detailed suggestion please go <a href=\"/contact_general.html\">here</a>.",
  },
};

export const SUPPORT_DEFAULT_CONTENT: SupportContentBlock = {
  title: "Welcome to Merrow's technical help guide",
  html:
    "If you have trouble finding what you're looking for please contact us directly:<br/><br/>" +
    "Domestic phone: 800.431.6677<br/>" +
    `Email: ${SUPPORT_CONTACT.supportEmail}<br/>` +
    "Skype: merrowusa<br/>" +
    "Jabber: merrow@gmail.com<br/>" +
    `International phone: ${SUPPORT_CONTACT.supportPhoneDisplay}<br/>` +
    "US &amp; INT fax: 508.689.4098<br/><br/>" +
    "We're here to help!",
};
