pipeline {
    agent { docker { image 'php:8.2.9-alpine3.18' } }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
            }
        }
    }
}
