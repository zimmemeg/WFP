<!DOCTYPE html>
<html lang="en-US" ng-app="Site">
    <head>
        <meta charset="UTF-8">
        <title>Admin Page - Mommy In The Making</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/main.css">
            
        <!--Main body text-->
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Give+You+Glory' rel='stylesheet' type='text/css'>
    </head>
    
    <body>
        <div id="main-wrapper">
             <header>
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('/assets/images/branding.png'); ?>" alt="Mommy In The Making" width="377" height="203" id="logo"></a>
                
                <div id="nav">
                    <ul>
                        <li><a href="home/logout">Log Out</a></li>
                    </ul>
                </div>
            </header>
            <div id="main-content">
                <h2>Welcome back, <?php echo $username; ?>!</h2>
                
                
               
              <form class="post" method="post" action=?>
                 <input type="text" name="Subject" placeholder="Subject" autofocus required><br />
                 <input type="text" name="Summary" placeholder="Summary" required><br />
                 <textarea name="Content" rows="20" cols="30" wrap="hard" placeholder="Enter your blog post here!" required></textarea><br />
                 <input type="submit" name="Submit" value="Submit">
              </form> 
            </div>
            
            <?php
            
                 $subject = $this->input->post('Subject');
                 $summary = $this->input->post('Summary');
                 $content = $this->input->post('Content');
                
                    $data = array(
                      'Subject' => $subject,
                      'Summary' => $summary,
                      'Content' => $content
                    );
                    
                    if (isset($_POST['Subject']) && isset($_POST['Summary']) && isset($_POST['Content'])) 
                    {
                       $submit = $this->db->insert('posts', $data);
                    
                    if($submit){
                        echo "<h2>Submission Successful</h2>";
                    } else{
                        echo "<h2>There was an error</h2>";
                    }
                    }
                    
                    
                
                ?>
            
            
            <footer>
                <p>&copy; Megan Zimmerman | Dragon Productions | 2013</p>
            </footer>
        </div>
    </body>

</html> 