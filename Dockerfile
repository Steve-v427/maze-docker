# Use the official Nginx image as the base image
FROM nginx:1.10.1-alpine

# Copy the website files into the Nginx html directory
COPY /src/php /usr/share/nginx/html



# Command to start Nginx when the container starts -g turns daemon off 
CMD ["nginx", "-g", "daemon off;"]

