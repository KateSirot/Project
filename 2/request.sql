SELECT 
    a.Topic_subject AS article_title,
    c.Content AS comment_content,
    r.Rating AS rating_value
FROM 
    Articles a
JOIN 
    Article_authors aa ON a.ID = aa.Article_id
JOIN 
    Authors au ON au.ID = aa.Author_id
LEFT JOIN 
    Comments c ON a.ID = c.Article_id
LEFT JOIN 
    Ratings r ON a.ID = r.Article_id
WHERE 
    au.Name = 'Имя_автора';