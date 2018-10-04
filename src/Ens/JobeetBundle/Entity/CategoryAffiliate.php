<?php

namespace Ens\JobeetBundle\Entity;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \Ens\JobeetBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Ens\JobeetBundle\Entity\Affiliate
     */
    private $affiliate;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category.
     *
     * @param \Ens\JobeetBundle\Entity\Category|null $category
     *
     * @return CategoryAffiliate
     */
    public function setCategory(\Ens\JobeetBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \Ens\JobeetBundle\Entity\Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set affiliate.
     *
     * @param \Ens\JobeetBundle\Entity\Affiliate|null $affiliate
     *
     * @return CategoryAffiliate
     */
    public function setAffiliate(\Ens\JobeetBundle\Entity\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate.
     *
     * @return \Ens\JobeetBundle\Entity\Affiliate|null
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
}
