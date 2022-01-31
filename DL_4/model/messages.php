<?php


	function messagesAll() : array{
		$sql = "SELECT * FROM messages INNER JOIN categoryes ON messages.id_cat = categoryes.id ORDER BY dt_add DESC";
		$query = dbQuery($sql);
		return $query->fetchAll();
	}

	function messagesAdd(array $fields) : bool{
		$sql = "INSERT INTO messages (name, text, id_cat) VALUES (:name, :text, :id_cat)";
		$query = dbQuery($sql, $fields);
		return true;
	}

	function messagesOne(int $id){
		$sql = "SELECT messages.name, messages.text, messages.dt_add, messages.id_cat, categoryes.category as cat  FROM messages INNER JOIN categoryes ON messages.id_cat = categoryes.id WHERE id_message=:id ";
		$query = dbQuery($sql, ['id' => $id]);
		return $query->fetch();
	}

    function messagesEdit(array $fields, int $id) : bool{
        $fields['id'] = $id;
        $sql = "UPDATE messages SET name=:name, text=:text, id_cat=:id_cat WHERE id_message=:id";
        $query = dbQuery($sql, $fields);
        return true;
    }

    function messagesDelete(int $id) : bool{
        $sql = "DELETE FROM messages WHERE id_message=:id";
        $query = dbQuery($sql, ['id' => $id]);
        return true;
    }

    function validateFields(&$fields) : array
    {
        $err = [];
        foreach ($fields as $field) {
            if ($field === '') {
                $err[] = 'Заполните все поля!';
            }
        }
        if(mb_strlen($fields['name'])<2){
           $err[] = 'Name is too short';
        }

        if(mb_strlen($fields['text'])<10 || mb_strlen($fields['text']) > 200){
            $err[] = 'The text range must be between 10 and 200 chars';
        }

        foreach ($fields as $key => $field) {
                $fields[$key] = htmlentities($field);
        }

        return $err;
    }