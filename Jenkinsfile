pipeline {
    agent any
    stages {
        stage('Pull Repository') {
            steps {
                // Pull the latest changes from the 'master' branch
                git branch: 'master', url: 'https://github.com/abdullahshah10/Wordpress-Project.git'
            }
        }
        stage('Test') {
            steps {
                // Run any tests if necessary
                echo 'Running tests...'
            }
        }
        stage('Deploy') {
            steps {
                // Use rsync to sync files to the web directory
                sh '''
                    # Change to your Jenkins workspace directory
                    cd /var/jenkins_home/workspace/Wordpress-Project
                    
                    # Sync only changed files to the EC2 instance's web directory
                    # This command assumes that the EC2 instance's web directory is accessible
                    rsync -avz --delete --exclude='*.git' . /var/www/html/
                '''
            }
        }
    }
}

// test comment