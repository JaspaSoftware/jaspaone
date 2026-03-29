# Deployment Configuration Guide for Azure App Service

Following your successful deployment to Azure, you must configure the GitHub repository and Azure App Service with the necessary secrets and environment variables.

## 1. GitHub Actions: Adding the Publish Profile

The `deploy.yml` workflow requires the `AZURE_WEBAPP_PUBLISH_PROFILE` secret to authenticate and push code.

1.  **Download the Publish Profile from Azure:**
    *   Navigate to your **App Service** in the Azure Portal.
    *   On the **Overview** tab, click **Get publish profile**.
    *   Open the downloaded file and copy its content.
2.  **Add the Secret to GitHub:**
    *   Go to your **GitHub Repository** -> **Settings** -> **Secrets and variables** -> **Actions**.
    *   Click **New repository secret**.
    *   Name: `AZURE_WEBAPP_PUBLISH_PROFILE`.
    *   Value: Paste the content you copied from the publish profile file.

---

## 2. Azure App Service: Environment Variables

Laravel applications require several environment variables to function correctly. These should be set in the Azure Portal under **Configuration**.

1.  Navigate to your **App Service** in the Azure Portal.
2.  Go to **Configuration** (under the "Settings" section in the sidebar).
3.  Click **+ New application setting** for each variable listed below.

### Key Application Settings:
| Category | Settings Key | Example / Description |
| :--- | :--- | :--- |
| **Core** | `APP_KEY` | Your unique app key (e.g., `base64:wID/CO/WkfE...`) |
| | `APP_ENV` | `production` (Use `codecanyon` if following `.env.example`) |
| | `APP_DEBUG` | `false` |
| | `APP_URL` | Your Azure App Service URL (e.g., `https://jaspaone.azurewebsites.net`) |
| **Database** | `DB_CONNECTION` | `mysql` |
| | `DB_HOST` | Your database server address |
| | `DB_DATABASE` | Your database name |
| | `DB_USERNAME` | Your database username |
| | `DB_PASSWORD` | Your database password |
| **Mail** | `MAIL_MAILER` | `smtp` (or as per your provider) |
| | `MAIL_HOST` | e.g., `smtp.mailgun.org` |
| | `MAIL_PORT` | `587` |
| | `MAIL_USERNAME` | Your SMTP username |
| | `MAIL_PASSWORD` | Your SMTP password |

> [!TIP]
> After adding all settings, ensure you click **Save** at the top of the Configuration page and then **Continue**. This will restart the app and apply the new configuration.

---

## 3. Verify Deployment

To verify that everything is working:
1.  Make a small change to the code in the `app/` directory (e.g., a comment change).
2.  Push it to the `main` branch.
3.  Monitor the **Actions** tab in GitHub to see the "Build and Deploy to Azure" workflow run.
4.  Once completed, browse to your app URL.
