#!groovy

node {
    try {
            agent { docker { image 'node:20.10.0-alpine3.19' } }
            stage('Checkout GitHub') {
                checkout scm
                slackSend color: 'warning', message: "Started `${env.JOB_NAME}#${env.BUILD_NUMBER}`"
            }

            stage('Install module NPM') {
                bat 'node --version'
                bat 'npm install'
            }

            stage('Testing by Jest'){
                bat 'npm run test'
            }

            stage('Deploy to Hostneverdie') {
                bat 'bash -c "plink medexplu@27.254.96.247 -P 98 -l medexplu -pw \'R5m+3;8i7lqUZY\' -batch \'cd domains/medexplus.co.th/public_html;git pull;exit;\'"'
            }

            stage('Publish results') {
                slackSend color: 'good', message: "Build successful: `${env.JOB_NAME}#${env.BUILD_NUMBER}` <${env.BUILD_URL}>"
            }
    }
catch (err) {
        slackSend color: 'danger', message: "Build failed : face_with_head_bandage: \n`${env.JOB_NAME}#${env.BUILD_NUMBER}`"
        throw err
}
}