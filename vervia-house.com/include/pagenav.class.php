<?php
/**
 * @package 		PageNav
 * @author			iven
 * @version		1.0   2005/10/8
 * 
 * PageNav()			(构造函数)<br>
 * TotalPage()			(总共页数)<br>
 * FirstPage()			(第一页)<br>
 * PrePage() 			(上一页)<br>
 * NextPage()			(下一页)<br>
 * LastPage()			(最后一页)<br>
 * GetStartNum()		(记录开始NUMBER)<br>
 * 
 */
class PageNav{

	var $mCurPage;//当前第几页
	var $mTotalRecord;//总共记录条数
	var $mStartNum;//查询记录开始数
	var $mTotalPage;//总页数
	var $mPerPageNum;//每页显示记录条数��
	
	//显示信息
	var $go_top="TOP";
	var $go_back="BACK";
	var $go_next="NEXT";
	var $go_end="END";
	/**
	* ���캯��
	* @param 		int			$intCurPage			(当前第几页)
	* @param 		int			$intTotalRecord		(总共记录条数）
	* @param 		int			$intPerPageNum		(每页显示记录条数）
	* @return   void
	*/
	function PageNav($intCurPage,$intTotalRecord,$intPerPageNum="10"){
		$this->mCurPage=$intCurPage;
		$this->mTotalRecord=$intTotalRecord;
		$this->mPerPageNum=$intPerPageNum;
		$this->mTotalPage=ceil($intTotalRecord/$intPerPageNum);	
	}
	
	/** 
	* TotalPage (总页数)
	* @param
	* @return   	int		$this->mTotalPage			(��ҳ��                   
	*			
	*/
	function TotalPage(){
		return $this->mTotalPage;
	}
	
	/** 
	* FirstPage (第一页)
	* @param
	* @return   	int		1	(第一页）��һҳ��                   
	*			
	*/
	function FirstPage(){
		return 1;
	}

	/** 
	* PrePage (上一页)
	* @param
	* @return   	int		$this->mCurPage-1		(上一页）
	*			
	*/	
	function PrePage(){
		if($this->mCurPage>1){
			 return $this->mCurPage-1;
		}else{
			return $this->mCurPage;						
		}
	}
	
	/** 
	* NextPage (下一页)
	* @param
	* @return   	int		$this->mCurPage+1			(下一页）       
	*			
	*/
	function NextPage(){
		if($this->mCurPage<$this->mTotalPage){
			return $this->mCurPage+1;
		}else{
			return $this->mCurPage;			
		}
	}

	/** 
	* LastPage (最后一页)
	* @param
	* @return   	int		$this->mCurPage-1			(最后一页）
	*			
	*/	
	function LastPage(){
		return $this->mTotalPage;
	}


	/** 
	* GetStartNum (记录开始数)
	* @param
	* @return   	int		$this->mStartNum		(记录开始数）          
	*			
	*/	
	function GetStartNum(){
		$this->mStartNum=($this->mCurPage-1)*$this->mPerPageNum;
		return $this->mStartNum;
	}
	
	function Param($arrParam){
		//$param
		//value
		$strParam="";
		for($i=0;$i<sizeof($arrParam);$i++){
			$strParam.="&".$arrParam[$i][name]."=".urlencode($arrParam[$i][value])."";
		}
		return $strParam;
	}
	
	/*
	* GetLink()
	* @param
	* @return string $strLink(分页格式)
	*/
	function GetLink(){
		$strLink="Total:".$this->mTotalRecord."&nbsp;&nbsp;".$this->mCurPage."/".$this->mTotalPage."
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->FirstPage()."\" class=m_02>".$this->go_top."</a>
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->PrePage()."\" class=m_02>".$this->go_back."</a> 
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->NextPage()."\" class=m_02>".$this->go_next."</a> 
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->LastPage()."\" class=m_02>".$this->go_end."</a>
				  <input type=\"hidden\" name=\"maxpage\" value='".$this->mTotalPage."'>";
		return 	$strLink;	
	}

	function GetLinkParamMul($arrParam){
		$strLink="Total:".$this->mTotalRecord."&nbsp;&nbsp;".$this->mCurPage."/".$this->mTotalPage."
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->FirstPage().$this->Param($arrParam)."\" class=m_02>".$this->go_top."</a> 
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->PrePage().$this->Param($arrParam)."\" class=m_02>".$this->go_back."</a>
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->NextPage().$this->Param($arrParam)."\" class=m_02>".$this->go_next."</a> 
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->LastPage().$this->Param($arrParam)."\" class=m_02>".$this->go_end."</a>
				  <input type=\"hidden\" name=\"maxpage\" value='".$this->mTotalPage."'>";
		return 	$strLink;	
	}
		
	function GetLinkParam($strParam,$strNum){
		$strLink="Total:".$this->mTotalRecord."&nbsp;&nbsp;".$this->mCurPage."/".$this->mTotalPage."
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->FirstPage()."&".$strParam."=".urlencode($strNum)."\" class=m_02>".$this->go_top."</a> 
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->PrePage()."&".$strParam."=".urlencode($strNum)."\" class=m_02>".$this->go_back."</a>
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->NextPage()."&".$strParam."=".urlencode($strNum)."\" class=m_02>".$this->go_next."</a> 
				  <a href=\"".$_SERVER['PHP_SELF']."?page=".$this->LastPage()."&".$strParam."=".urlencode($strNum)."\" class=m_02>".$this->go_end."</a>
				  <input type=\"hidden\" name=\"maxpage\" value='".$this->mTotalPage."'>";
		return 	$strLink;	
	}
	
	
}
?>