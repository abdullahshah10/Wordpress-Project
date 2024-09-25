pipeline {
    agent any
    stages {
        stage('Pull Repository') {
            steps {
                // Pull the latest changes from the 'master' branch
                git branch: 'master', url: 'git@github.com:abdullahshah10/Wordpress-Project.git'
            }
        }
        stage('Test') {
            steps {
                // Optionally, run any tests
                echo 'Running tests...'
            }
        }
        stage('Deploy') {
            steps {
                // Use SSH to deploy the changes to your EC2 instance using rsync
                sshagent(['52.54.94.114']) {
                    sh '''
                        rsync -avz --delete -e "ssh -o StrictHostKeyChecking=no" ./ ubuntu@52.54.94.114:/var/www/html/
                        ssh -o StrictHostKeyChecking=no ubuntu@52.54.94.114 "
                        sudo service apache2 restart"
                    '''
                }
            }
        }
    }
}

// test comment