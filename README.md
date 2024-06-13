# Mozello sample basic payment provider

This repository provides a sample basic payment provider for [Mozello](https://www.mozello.com) websites.

An advanced demo with visual enhancements can be found here: [mozello-sample-payment-provider-ex](https://github.com/Mozello-SIA/mozello-sample-payment-provider-ex)

# Quick start
1. Create Mozello account if you haven't already.
2. The payment provider needs to be hosted in a public location. You will need to have the public URL to complete the next steps.
3. Modify `meta/manifest.json` and replace the sample values with your data.
4. Submit the manifest via [Payment integration setup portal](https://www.mozello.com/apps/api/payments/) and save the resulting API key. You can also re-submit your manifest later if it is changed.
5. Modify `config.php`. Fill in API key from the integration setup portal.
6. Modify other scripts and files to add the required functionality.
7. Upload `public` to your host.
8. The payment provider will be available in your Mozello website.


# Mozello API documentation

[Payment API](https://www.mozello.com/developers/payment-api/)
