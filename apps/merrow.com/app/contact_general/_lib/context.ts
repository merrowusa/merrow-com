export interface ContactContextInput {
  key?: string | null;
  label?: string | null;
  product?: string | null;
}

export interface ContactPageContext {
  legacyKey?: string;
  legacyLabel?: string;
  formType: "contact" | "quote" | "support";
  formTitle: string;
  intro: string;
  submitLabel: string;
  showMachine: boolean;
  initialMachine?: string;
  alert?: {
    tone: "success" | "error";
    message: string;
  };
}

function decodeMaybe(value?: string | null) {
  if (!value) return "";
  try {
    return decodeURIComponent(value);
  } catch {
    return value;
  }
}

function prettifyLabel(value?: string | null) {
  const decoded = decodeMaybe(value).trim();
  if (!decoded) return "";
  return decoded
    .replace(/[_-]+/g, " ")
    .replace(/\s+/g, " ")
    .trim();
}

export function resolveContactPageContext(input: ContactContextInput): ContactPageContext {
  const key = decodeMaybe(input.key).trim().toLowerCase();
  const label = prettifyLabel(input.label);
  const product = prettifyLabel(input.product);

  const base: ContactPageContext = {
    legacyKey: key || undefined,
    legacyLabel: label || undefined,
    formType: "contact",
    formTitle: "Send Us a Message",
    intro: "We're here to help with your sewing machine needs. Reach out to us using the form below or contact us directly.",
    submitLabel: "Send Message",
    showMachine: false,
  };

  if (key === "success") {
    return {
      ...base,
      alert: {
        tone: "success",
        message: "Thanks for sending us a note. We'll be in touch quickly.",
      },
    };
  }

  if (key === "badcaptcha" || key === "missedafield") {
    return {
      ...base,
      alert: {
        tone: "error",
        message: "Looks like some required information was missing. Please review your details and submit again.",
      },
    };
  }

  if (key === "samples") {
    const machine = label || product;
    return {
      ...base,
      formType: "quote",
      formTitle: machine ? `Machine Inquiry: ${machine}` : "Machine Inquiry",
      intro: machine
        ? `Interested in the Merrow ${machine}? Send us a note and our team will follow up with details.`
        : "Interested in a Merrow machine? Send us a note and our team will follow up with details.",
      submitLabel: "Request Information",
      showMachine: true,
      initialMachine: machine || undefined,
    };
  }

  if (key === "learnsupport") {
    return {
      ...base,
      formType: "support",
      formTitle: "Support Program Inquiry",
      intro: "Want to learn more about the Merrow support program? Send your question and we'll connect you with the right team.",
      submitLabel: "Request Support Details",
      showMachine: true,
    };
  }

  if (key === "agents") {
    return {
      ...base,
      formType: "contact",
      formTitle: "Dealer / Agent Contact Request",
      intro: "Looking for a Merrow agent near you? Send your details and we will help connect you.",
      submitLabel: "Send Contact Request",
      showMachine: false,
    };
  }

  if (key === "buy") {
    return {
      ...base,
      formType: "quote",
      formTitle: "Purchase Inquiry",
      intro: product
        ? `Interested in purchasing ${product}? Send us your request and we'll connect you with sales.`
        : "Interested in purchasing a Merrow product? Send us your request and we'll connect you with sales.",
      submitLabel: "Request Pricing",
      showMachine: true,
      initialMachine: product || undefined,
    };
  }

  return base;
}
