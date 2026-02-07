"use client";

// @version contact-form v1.0
// Reusable contact/submission form with honeypot spam protection

import { useState, FormEvent } from "react";

interface ContactFormProps {
  type: "contact" | "quote" | "support" | "parts" | "threading";
  title?: string;
  description?: string;
  showCompany?: boolean;
  showPhone?: boolean;
  showMachine?: boolean;
  submitLabel?: string;
  extraFields?: Record<string, string>;
  initialValues?: Partial<{
    name: string;
    email: string;
    company: string;
    phone: string;
    machine: string;
    message: string;
  }>;
}

interface FormState {
  status: "idle" | "submitting" | "success" | "error";
  message: string;
}

export function ContactForm({
  type,
  title = "Contact Us",
  description,
  showCompany = false,
  showPhone = false,
  showMachine = false,
  submitLabel = "Send Message",
  extraFields = {},
  initialValues = {},
}: ContactFormProps) {
  const [formState, setFormState] = useState<FormState>({
    status: "idle",
    message: "",
  });

  async function handleSubmit(e: FormEvent<HTMLFormElement>) {
    e.preventDefault();
    setFormState({ status: "submitting", message: "" });

    const formData = new FormData(e.currentTarget);
    const data: Record<string, string> = {
      type,
      ...extraFields,
    };

    formData.forEach((value, key) => {
      if (typeof value === "string") {
        data[key] = value;
      }
    });

    try {
      const response = await fetch("/api/submissions", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data),
      });

      const result = await response.json();

      if (response.ok && result.success) {
        setFormState({
          status: "success",
          message: result.message || "Thank you! We'll be in touch soon.",
        });
        // Reset form
        e.currentTarget.reset();
      } else {
        setFormState({
          status: "error",
          message: result.error || "Something went wrong. Please try again.",
        });
      }
    } catch {
      setFormState({
        status: "error",
        message: "Network error. Please check your connection and try again.",
      });
    }
  }

  if (formState.status === "success") {
    return (
      <div className="bg-green-50 border border-green-200 rounded p-6 text-center">
        <div className="text-green-600 text-xl mb-2">&#10003;</div>
        <p className="text-green-800 font-semibold">{formState.message}</p>
        <button
          type="button"
          onClick={() => setFormState({ status: "idle", message: "" })}
          className="mt-4 text-sm text-green-700 underline"
        >
          Send another message
        </button>
      </div>
    );
  }

  return (
    <form onSubmit={handleSubmit} className="space-y-4">
      {title && <h3 className="text-lg font-semibold text-merrow-textMain">{title}</h3>}
      {description && <p className="text-sm text-merrow-textSub mb-4">{description}</p>}

      {/* Honeypot field - hidden from users, visible to bots */}
      <input
        type="text"
        name="_honey"
        tabIndex={-1}
        autoComplete="off"
        style={{ position: "absolute", left: "-9999px" }}
        aria-hidden="true"
      />

      <div>
        <label htmlFor="name" className="block text-sm font-medium text-merrow-textMain mb-1">
          Name *
        </label>
        <input
          type="text"
          id="name"
          name="name"
          required
          defaultValue={initialValues.name}
          className="w-full border border-merrow-border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-merrow-linkBlue"
          placeholder="Your name"
        />
      </div>

      <div>
        <label htmlFor="email" className="block text-sm font-medium text-merrow-textMain mb-1">
          Email *
        </label>
        <input
          type="email"
          id="email"
          name="email"
          required
          defaultValue={initialValues.email}
          className="w-full border border-merrow-border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-merrow-linkBlue"
          placeholder="your@email.com"
        />
      </div>

      {showCompany && (
        <div>
          <label htmlFor="company" className="block text-sm font-medium text-merrow-textMain mb-1">
            Company
          </label>
          <input
            type="text"
            id="company"
            name="company"
            defaultValue={initialValues.company}
            className="w-full border border-merrow-border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-merrow-linkBlue"
            placeholder="Your company"
          />
        </div>
      )}

      {showPhone && (
        <div>
          <label htmlFor="phone" className="block text-sm font-medium text-merrow-textMain mb-1">
            Phone
          </label>
          <input
            type="tel"
            id="phone"
            name="phone"
            defaultValue={initialValues.phone}
            className="w-full border border-merrow-border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-merrow-linkBlue"
            placeholder="Your phone number"
          />
        </div>
      )}

      {showMachine && (
        <div>
          <label htmlFor="machine" className="block text-sm font-medium text-merrow-textMain mb-1">
            Machine Model
          </label>
          <input
            type="text"
            id="machine"
            name="machine"
            defaultValue={initialValues.machine}
            className="w-full border border-merrow-border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-merrow-linkBlue"
            placeholder="e.g., MG-3U, 70-D3B"
          />
        </div>
      )}

      <div>
        <label htmlFor="message" className="block text-sm font-medium text-merrow-textMain mb-1">
          Message
        </label>
        <textarea
          id="message"
          name="message"
          rows={4}
          defaultValue={initialValues.message}
          className="w-full border border-merrow-border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-merrow-linkBlue resize-y"
          placeholder="How can we help?"
        />
      </div>

      {formState.status === "error" && (
        <div className="bg-red-50 border border-red-200 rounded p-3 text-sm text-red-700">
          {formState.message}
        </div>
      )}

      <button
        type="submit"
        disabled={formState.status === "submitting"}
        className="w-full bg-merrow-navBar text-white font-semibold py-2 px-4 rounded hover:bg-[#3f3f3f] focus:outline-none focus:ring-2 focus:ring-merrow-linkBlue disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
      >
        {formState.status === "submitting" ? "Sending..." : submitLabel}
      </button>

      <p className="text-xs text-merrow-textMuted text-center">
        Or contact us directly:{" "}
        <a href="mailto:support@merrow.com" className="text-merrow-linkBlue underline">
          support@merrow.com
        </a>{" "}
        |{" "}
        <a href="tel:+15086894095" className="text-merrow-linkBlue underline">
          508.689.4095
        </a>
      </p>
    </form>
  );
}
