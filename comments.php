<!-- Comments section -->
<hr>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>
                    <?php
                        if(!have_comments()){
                            echo 'Leave a comment';
                        } else{
                            echo get_comments_number() . ' Comments';
                        }
                    
                    ?>
                </h1>
                <?php
                
                wp_list_comments(array(
                    'avatar_size' => 50,
                    'style' => 'div',
                ));
                
                
                
                ?>
                <!-- <div class="comment mt-4 text-justify float-left"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Jhon Doe</h4> <span>- 20 October, 2018</span> <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div> -->
               
            </div>
           
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <?php
                    if(comments_open()){
                        comment_form(array(
                            'class_form' => 'form-control,container',
                           
                            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                            'title-reply-after' => '</h2>'
                        ));
                    }
                
                ?>
              
            </div>
        </div>
    </div>
</section>