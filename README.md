# PHP Voice Quickstart

This quickstart serves as a guide to get your first Voice application up and running with [FreeClimb](https://docs.freeclimb.com/docs/how-freeclimb-works).

Specifically, the project will:

- Receive an incoming call via a FreeClimb application
- Respond with a [PerCL](https://docs.freeclimb.com/reference/percl-overview) command to say 'Hello World!' to caller

## Tutorial

We offer a [PHP Voice Quickstart Tutorial](https://docs.freeclimb.com/docs/php-voice-calling-quickstart) for more detailed set-up instructions and explanation of how FreeClimb works.

## Requirements

- A [FreeClimb account](https://www.freeclimb.com/dashboard/signup/)

- A [registered application](https://docs.freeclimb.com/docs/registering-and-configuring-an-application#register-an-app) with a named alias

- A [configured FreeClimb number](https://docs.freeclimb.com/docs/getting-and-configuring-a-freeclimb-number) assigned to your application

- Trial accounts: a [verified number](https://docs.freeclimb.com/docs/using-your-trial-account#verifying-outbound-numbers)

## Tools:

- [PHP](https://www.php.net/manual/en/install.php) 7.2 or higher
- [Composer](https://getcomposer.org/)
- [ngrok](https://ngrok.com/download) (recommended for hosting)

## Setting up the Quickstart

{Language specific but an example of Node.js is below}

1. Install the required packages

   ```bash
   composer install
   ```

2. Make your local server publicly accessible
    ```bash
    ngrok http 3000
    ```
    Once you run ngrok you should receive a response with a public URL, that looks something like 'https://ba1c-63-209-137-19.ngrok-free.app'. 

3. [Configure your applications's endpoints](https://docs.freeclimb.com/docs/registering-and-configuring-an-application#configure-your-application) by adding a publicly accessible URL (we recommend an [ngrok](https://ngrok.com/download) URL) and the route reference `/incomingCall` to your App Config's VoiceURL:

   ```bash
   https://YOUR-URL.ngrok.io/incoming-call.php
   ```

## Running the Quickstart

1. Start your voice quickstart application

   ```bash
   php -S 127.0.0.1:3000
   ```

2. Call the FreeClimb number assigned to the application you've configured for this tutorial

## Using Docker to Run the Quickstart

1. Pull docker image from dockerhub

   ```bash
   docker pull freeclimbapi/php-voice-quickstart
   ```

2. Run docker image

   ```bash
   docker run -p 3000:3000 freeclimbapi/php-voice-quickstart
   ```

## Feedback & Issues

If you would like to give the team feedback or you encounter a problem, please [contact support](https://www.freeclimb.com/support/) or [submit a ticket](https://freeclimb.com/dashboard/portal/support) in the dashboard.
