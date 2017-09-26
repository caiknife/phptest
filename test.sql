SELECT `stop`, COUNT(line) AS `line_count` FROM `subway`
GROUP BY `stop` ORDER BY `line_count` DESC LIMIT 1;

SELECT `line` FROM `subway` WHERE `stop` IN (A, B);