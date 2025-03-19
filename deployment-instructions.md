# Deployment Instructions for UAV Pilot Study Website

These instructions will guide you through deploying the UAV Pilot Study website to your PHP/HTML server at https://uav-pilot-study.com/.

## Prerequisites

- A web server with PHP support
- FTP access to your server or another method to upload files
- The ability to set up .htaccess files on your server

## Step 1: Download the Repository

1. Go to https://github.com/NUXZA/uav-pilot-study
2. Click the green "Code" button and select "Download ZIP"
3. Extract the ZIP file to your local computer

## Step 2: Prepare Your Server

1. Connect to your server via FTP or your preferred method
2. Create a backup of any existing website content (if applicable)
3. Ensure your server has PHP support enabled

## Step 3: Upload the Files

1. Upload all files from the repository to the root directory of your website
2. Make sure the `.htaccess` file is properly uploaded (it's a hidden file)
3. Ensure all directories and files maintain their structure

## Step 4: Create the Static Directory Structure

Create the following directory structure and upload the required files:

```
/static/css/main.72c86fee.css
/static/css/main.72c86fee.css.map
/static/js/453.9537b117.chunk.js
/static/js/453.9537b117.chunk.js.map
/static/js/main.431a87c6.js
/static/js/main.431a87c6.js.LICENSE.txt
/static/js/main.431a87c6.js.map
```

You can find these files in the `part107-quiz/build/static` directory of your local copy.

## Step 5: Verify the Deployment

1. Navigate to https://uav-pilot-study.com/upload.php to verify all files are in place
2. Test the website by navigating to https://uav-pilot-study.com/
3. Check for any errors in the browser's developer console

## Troubleshooting

- If you see a blank page, check that JavaScript is enabled in your browser
- If you see a 404 error for assets, make sure the static directory structure is correct
- If the page reloads don't work, ensure the .htaccess file is properly uploaded and working

## Additional Support

If you encounter any issues during deployment, please:

1. Check the server's error logs
2. Make sure the server meets all the requirements
3. Reach out for support via the repository's issue tracker