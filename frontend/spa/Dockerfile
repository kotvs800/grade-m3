FROM node:18.10.0-alpine
WORKDIR /app
COPY . .
RUN npm install
RUN npm run build
RUN npm run serve

#FROM nginx:stable-alpine
#COPY --from=build /app/build /usr/share/nginx/html
#CMD ["nginx", "-g", "daemon off;"]
#